var express = require("express");

var app = express();

app.use(express.static("public"));

app.get("/", function (req, res) {
   console.log("Recieved a request for /");

   res.write("This is the root.");
   res.end();
});

app.get("/math", function(req, res) {
   console.log("Recieved a request for math page");

   res.write("This is the Math Page");
   res.end();
});

app.listen(5000, function() {
   console.log("The server is up and listening on port 5000");
})