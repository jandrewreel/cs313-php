<?php
   session_start();

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
   }

   array_push($_SESSION['cart'], $GET['id']);

   header('Location: browse.php');
?>

<!DOCTYPE html>
<html>
<head>
   <title>Add On</title>
</head>
<body>
   <a href="cart.php">Link to Cart
</body>
</html>