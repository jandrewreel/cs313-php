<!DOCTYPE html>
<html>
<head>
   <title>Browse Page</title>
   <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
   </div>
   <div class="logophoto">
      <img src="mountain1.jpg">
      <div class="centered"><b>Outdoor Co.</b></div>
   </div>
   <hr>

   <h1 class="heading">Products:</h1><br>
   <div class="row">
      <div class="column">
         <h2>Product 1</h2>
         <a href="addOn.php?id=product1">Add to Cart</a>
      </div>

      <div class="column">
         <h2>Product 2</h2>
         <a href="addOn.php?id=product2">Add to Cart</a>
      </div>

      <div class="column">
         <h2>Product 3:</h2>
         <a href="addOn.php?id=product3">Add to Cart</a>
      </div>
   </div>

   <div class="row">
      <div class="column">
         <h2>Product 4:</h2>
         <a href="addOn.php?id=product4">Add to Cart</a>
      </div>
      <div class="column">
         <h2>Product 5:</h2>
          <a href="addOn.php?id=product5">Add to Cart</a>
      </div>
      <div class="column">
         <h2>Product 6:</h2>
         <a href="addOn.php?id=product6">Add to Cart</a>
      </div>
   </div>
   <hr>

</body>
</html>