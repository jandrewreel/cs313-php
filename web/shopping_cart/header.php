<?php

   $page = basename($_SERVER['PHP_SELF']);

   if ($page == 'browse.php') {
      echo '<ul>
               <li class="company">Outdoor Co.</li>
               <li><a href = "browse.php"><b>Browse</b></a></li>
               <li><a href = "cart.php">Shopping Cart</a><li>
               <li><a href = "checkout.php">Checkout</a></li>
            </ul>';
   }

   if ($page == 'cart.php') {
      echo '<ul>
               <li class="company">Outdoor Co.</li>
               <li><a href = "browse.php">Browse</a></li>
               <li><a href = "cart.php"><b>Shopping Cart</b></a></li>
               <li><a href = "checkout.php">Checkout</a></li>
            </ul>';
   }

   if ($page == 'checkout.php') {
      echo '<ul>
               <li class="company">Outdoor Co.</li>
               <li><a href = "browse.php">Browse</a></li>
               <li><a href = "cart.php">Shopping Cart</a></li>
               <li><a href = "checkout.php"><b>Checkout</b></a></li>
            </ul>';
   }

?>