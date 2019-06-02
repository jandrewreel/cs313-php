<?php
   require 'connectDb.php';
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <style type="text/css">
      div {
         float: left;
         width: 20%;
      }
   </style>
</head>
<body>
   <h1>Workout Site</h1>


   <div>Chest</div>
   <div>Back</div>
   <div>Legs</div>
   <div>Biceps</div>
   <div>Triceps</div>

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
   echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }

?>

</body>
</html>