var http = require('http');

function sayHello(req, res) {
   console.log("Recieve a request for: " + req.url);

   if (req.url == "/home.html") {
      res.writeHead(200, {"Content-Type": "text/html"});
      res.write("<h1>Welcome to the Home Page</h1>");
   }
   else if (req.url == "/getData.html") {
      res.writeHead(200, {"Content-Type": "application/json"});
      var obj = '{"name": "Justin", "class": "cs313"}';
      var myJSON = JSON.parse(obj);
      res.write("Name: ");
      res.write(myJSON.name);
      res.write("  Class: ");
      res.write(myJSON.class);
   }
   else {
      res.writeHead(404, {"Content-Type": "text/html"});
      res.write("<h1>Page Not Found</h1>");
   }
   res.end();
}

var server = http.createServer(sayHello);

server.listen(8888);

console.log("The server is now listening on port 8888...");