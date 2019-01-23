<?php

   $page = basename($_SERVER['PHP_SELF']);

   if ($page == 'browse.php') {
      echo '<a href = "browse.php"><b>Browse</b></a> -
            <a href = "cart.php">Shopping Cart</a> -
            <a href = "checkout.php>Checkout</a>';
   }

   if ($page == 'cart.php') {
      echo '<a href = "browse.php">Browse</a> -
            <a href = "cart.php"><b>Shopping Cart</b></a> -
            <a href = "checkout.php>Checkout</a>';
   }

   if ($page == 'checkout.php') {
      echo '<a href = "browse.php">Browse</a> -
            <a href = "cart.php">Shopping Cart</a> -
            <a href = "checkout.php><b>Checkout</b></a>';
   }

?>