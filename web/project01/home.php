<?php
   require 'connectDb.php';
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
</head>
<body>
   <h1>Workout Site</h1>



   <?php


   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();


   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $muscle_group = $row['book'];
   $workout_name = $row['chapter'];
   $sets = $row['verse'];
   $reps = $row['content'];
   echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }

?>

</body>
</html>