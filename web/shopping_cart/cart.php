<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Cart</title>
   <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
      <h1 class="heading">Shopping Cart</h1>
      <hr>
      <div class="cart">
         <?php
         foreach ($_SESSION['cart'] as $value) {
            echo "$value <br>";
         }
      ?>
      </div>

   </div>
</body>
</html>