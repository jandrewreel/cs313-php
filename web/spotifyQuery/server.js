var express = require('express');
var request = require('request');
var cors = require('cors');
var querystring = require('querystring');
var cookieParser = require('cookie-parser');
var fetch = require("node-fetch");

var client_id = '731f56eeb4454a61b1fb560347600d5a';
var client_secret = '4a427bae4d554604b0692053040dbacd';
var redirect_uri = 'http://localhost:5000/callback/';

const port = process.env.PORT || 5000;

/**
 * Generates a random string
 */
var generateRandomString = function(length) {
   var text = '';
   var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

   for (var i = 0; i < length; i++) {
      text += possible.charAt(Math.floor(Math.random() * possible.length));
   }
   return text;
};

var stateKey = 'spotify_auth_state';

var app = express();

app.use(express.static(__dirname + '/public'));
app.use(express.urlencoded({extended: true}));
app.use(express.json());
app.use(cors());
app.use(cookieParser());

//GET LOGIN
app.get('/login', function(req, res) {

   console.log("Login Request");

   var state = generateRandomString(16);
   res.cookie(stateKey, state);

   //application requrest authorization
   var scope = 'user-read-private user-read-email';
   res.redirect('https://accounts.spotify.com/authorize?' +
      querystring.stringify({
         response_type: 'code',
         client_id: client_id,
         scope: scope,
         redirect_uri: redirect_uri,
         state: state
      }));
});

//GET CALLBACK FUNCTION
app.get('/callback', function(req, res) {

   //application request refresh and access tokens
   //checks state parameter

   var code = req.query.code || null;
   var state = req.query.state || null;
   var storedState = req.cookies ? req.cookies[stateKey] : null;

   if (state === null || state !== storedState) {
      res.redirect('/#' +
         querystring.stringify({
            error: 'state_mismatch'
         }));
   } else {
      res.clearCookie(stateKey);
      var authOptions = {
         url: 'https://accounts.spotify.com/api/token',
         form: {
            code: code,
            redirect_uri: redirect_uri,
            grant_type: 'authorization_code'
         },
         headers: {
            'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64'))
         },
         json: true
      };

      request.post(authOptions, function(error, response, body) {
         if (!error && response.statusCode === 200) {

            var access_token = body.access_token,
                refresh_token = body.refresh_token;

            var options = {
               url: 'https://api.spotify.com/v1/me',
               headers: { 'Authorization': 'Bearer ' + access_token},
               json: true
            };

            request.get(options, function(error, response, body) {
               console.log(body);
            });
            res.redirect('/#' +
               querystring.stringify({
                  access_token: access_token,
                  refresh_token: refresh_token
               }));
         } else {
            res.redirect('/#' +
               querystring.stringify({
                  error: 'invalid_token'
               }));
         }
      });
   }
});

//REFRESH TOKEN
app.get('/refresh_token', function(req, res) {

  // requesting access token from refresh token
  var refresh_token = req.query.refresh_token;
  var authOptions = {
    url: 'https://accounts.spotify.com/api/token',
    headers: { 'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64')) },
    form: {
      grant_type: 'refresh_token',
      refresh_token: refresh_token
    },
    json: true
  };

  request.post(authOptions, function(error, response, body) {
    if (!error && response.statusCode === 200) {
      var access_token = body.access_token;
      res.send({
        'access_token': access_token
      });
    }
  });
});

//GET SEARCH QUERY
app.get("/search", search);

function search(req, res) {
   console.log("Request for Search");

   //Search Item
   const song = req.query.song;
   console.log('Searching for: ' + song);

   var searchType = req.query.searchType;
   console.log('Search Type = ' + searchType);

   var accessToken = req.query.accessToken;
   console.log("Access Token: " + accessToken);

   var url = 'https://api.spotify.com/v1/search?q=' + encodeURIComponent(song) + '&type=' + searchType + '&market=US&limit=20';

   var myOptions = {
      method: 'GET',
      headers: {
        'Authorization': 'Bearer ' + accessToken
      },
      mode: 'cors',
      cache: 'default'
    };

    //Search by album
    if (searchType === 'album') {
      fetch(url, myOptions)
      .then(function(response) {
         return response.json();
      })
      .then(json => {

         var a = [];
         var b = [];
         var j = 0;

         for (var i = 0; i < 20; i++) {

            a[i] = json.albums.items[i];

            if (a[i].album_type == 'album' && a[i].artists[0].name == song) {

               b[j] = a[i];
               j++;
               console.log('Album Name: ' + a[i].name);
               console.log('Artist: ' + a[i].artists[0].name);
               console.log('');
            }
         }

         console.log("Update Results");
         console.log('');
         res.json(b);
      });
    }

    //Search by artist
    if (searchType === "artist") {
      fetch(url, myOptions)
      .then(function(response) {
         return response.json();
      })
      .then(json => {
          var artist = json.artists.items[0];

          console.log('Followers: ' + artist.followers.total);

          res.json(artist);
      });
    }

    //Search by track
    if (searchType === 'track') {
      fetch(url, myOptions)
      .then(function(response) {
        return response.json();
      })
      .then(json => {
        var t = [];
        var count = 1;

        for (var i = 0; i < json.tracks.items[0].album.total_tracks; i++) {

          t[i] = json.tracks.items[i];

          console.log("Track #" + count + " " + t[i].name);
          count++;
        }

        res.json(t);

      });
    }

};

app.listen(port, function() {
   console.log("Now listening for connections on port: ", port);
});
