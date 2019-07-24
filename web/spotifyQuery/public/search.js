
function searchFunction(req, res) {
   console.log("Searching for Artist");

   $("#ulResults").empty();

   var song = $("#song").val();
   var searchType = $("#searchType").val();
   var accessToken = $("#accessToken").val();


   $.get("/search", {song:song, accessToken:accessToken, searchType:searchType}, function(data) {
      console.log("Back from the Server with:");
      console.log(data);

      if (searchType === 'album') {
         for (var i = 0; i < data.length; i++) {
         $("#ulResults").append("Album: " + data[i].name + "<br>");
         $("#ulResults").append("Artist: " + data[i].artists[0].name + "<br>");
         //$("#ulResults").append("Released: " + data[i].release_date + "<br>");
         $("#ulResults").append("Tracks: " + data[i].total_tracks + "<br><br>");
         }
      }

      if (searchType === 'artist') {
         $("#ulResults").append("Total Followers: " + data.followers.total);
      }

      if (searchType === 'track') {
         var count = 1;
         for (var i = 0; i < data.length; i++) {
            $("#ulResults").append("Track #" + count + " " + data[i].name + "<br>");
            count++;
         }
      }
   });
}

