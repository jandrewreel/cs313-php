const express = require('express');
const app = express();
const port = process.env.PORT || 5000;

// tell it to use the public directory as one where static files live
app.use(express.static(__dirname + '/public'));

// views is directory for all template files
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

// set up a rule that says requests to "/math" should be handled by the
// handleMath function below
app.get('/math', handleMath);

// start the server listening
app.listen(port, function() {
  console.log('Node app is running on port', port);
});

function handleMath(request, response) {
   const mailType = request.query.mailType;
   const weight = Number(request.query.weight);


   // TODO: Here we should check to make sure we have all the correct parameters

   computeOperation(response, mailType, weight);
}

function computeOperation(response, mailType, weight) {

   let result = 0;

   if (mailType == "Letters (Stamped)") {
      result = "Stamped Letters";
   }

   // else if (op == "subtract") {
   //    result = left - right;
   // } else if (op == "multiply") {
   //    result = left * right;
   // } else if (op == "divide") {
   //    result = left / right;
   // } else {
   //    // It would be best here to redirect to an "unknown operation"
   //    // error page or something similar.
   // }

   // Set up a JSON object of the values we want to pass along to the EJS result page
   //const params = {operation: op, left: left, right: right, result: result};

   // Render the response, using the EJS page "result.ejs" in the pages directory
   // Makes sure to pass it the parameters we need.
   response.render('views/results', result);

}