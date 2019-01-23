<?php

   $page = basename($_SERVER['PHP_SELF']);

   echo '<div class = "test">';
   if ($page == 'homepage.php') {
      echo '<a href = "homepage.php"><b>Home</b></a> -
            <a href = "assignments.php">Assignments</a>';
   }
   if ($page == 'assignments.php') {
      echo '<a href = "homepage.php">Home</a> -
            <a href = "assignments.php"><b>Assignments</b></a>';
   }

   echo '</div>';
   echo '<h1>CS 313</h1>
         <h2>Web Engineering II</h2>';

?>