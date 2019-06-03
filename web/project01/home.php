<?php
   require 'connectDb.php';
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <style type="text/css">
      body {
         margin-left: 100px;
         margin-right: 100px;
      }
      div {
         float: left;
         width: 25%;
      }


   </style>
</head>
<body>
   <h1>Workout Site</h1>


   <div><h2>Chest<h2></div>
   <div><h2>Back<h2></div>
   <div><h2>Legs<h2></div>
   <div><h2>Arms<h2></div>



   <?php


   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();


   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $muscle_group = $row['muscle_group'];
   $workout_name = $row['workout_name'];
   $sets = $row['sets'];
   $reps = $row['reps'];
   if ($muscle_group == 'Chest') {
      echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   // echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }

?>

</body>
</html>