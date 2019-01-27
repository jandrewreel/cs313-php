<?php
   session_start();

   $cart = array();
?>

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

   <h1>Products:</h1><br>
   <div class="row">
      <div class="column">
         <form action="addOn.php" method="post">
            <h2>Product 1:</h2>
            <button>Add to Cart</button>
            <input type="submit" name="Add to Cart">
         </form>
      </div>
      <div class="column">
         <h2>Product 2:</h2>
         <button>Add to Cart</button>
      </div>
      <div class="column">
         <h2>Product 3:</h2>
         <button>Add to Cart</button>
      </div>
   </div>

   <div class="row">
      <div class="column">
         <h2>Product 4:</h2>
         <button>Add to Cart</button>
      </div>
      <div class="column">
         <h2>Product 5:</h2>
         <button>Add to Cart</button>
      </div>
      <div class="column">
         <h2>Product 6:</h2>
         <button>Add to Cart</button>
      </div>
   </div>

   <div class="row">
      <div class="column">
         <h2>Product 7:</h2>
         <button>Add to Cart</button>
      </div>
      <div class="column">
         <h2>Product 8:</h2>
         <button>Add to Cart</button>
      </div>
      <div class="column">
         <h2>Product 9:</h2>
         <button>Add to Cart</button>
      </div>
   </div>

</body>
</html>