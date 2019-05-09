<?php
   session_start();

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
   }

   array_push($_SESSION['cart'], $GET['id']);

   header('Location: browse.php');
?>