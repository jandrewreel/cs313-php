<!DOCTYPE html>
<html>
<head>
   <title>Checkout</title>
   <link rel="stylesheet" type="text/css" href="ponder03.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
      <h1>Checkout</h1>
   </div>

   <a href="confirmation.php">To Confirmation Page

   <form method = "post" action="<?php session_destroy(); ?>">
      <input type="submit" name="Clear Cart">
   </form>
</body>
</html>