<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Cart</title>
   <link rel="stylesheet" type="text/css" href="ponder03.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
      <h1 class="heading">Shopping Cart</h1>
      <hr>
      <div class="cart">
         <?php
         foreach ($_SESSION['cart'] as $value) {
            echo "<h3>$value <button class="rButton">Remove Item</button> <br></h3>";
         }
      ?>
      </div>
      <hr>
   </div>
</body>
</html>