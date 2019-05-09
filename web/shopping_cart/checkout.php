<!DOCTYPE html>
<html>
<head>
   <title>Checkout</title>
   <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
      <h1>Checkout</h1>
   </div>


   <form method = "post" action="<?php session_destroy();?>">
      <input type="submit" name="Clear Cart">
   </form>
</body>
</html>