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




   <?php

   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();

   //echo '<div><h2>Chest<h2></div>';
   echo '<div><h2>Chest</h2>';
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
      echo "<p>$muscle_group $workout_name $sets - \"$reps\"<p>";
   }


   // echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   echo '</div>';



   echo '<div><h2>Back</h2>';
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $muscle_group = $row['muscle_group'];
   $workout_name = $row['workout_name'];
   $sets = $row['sets'];
   $reps = $row['reps'];

   if ($muscle_group == 'Back') {
      echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }


   // echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   echo '</div>';


   echo '<div><h2>Legs</h2>';
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $muscle_group = $row['muscle_group'];
   $workout_name = $row['workout_name'];
   $sets = $row['sets'];
   $reps = $row['reps'];

   if ($muscle_group == 'Legs') {
      echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   echo '</div>';

   // echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   echo '<div><h2>Arms</h2>';
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $muscle_group = $row['muscle_group'];
   $workout_name = $row['workout_name'];
   $sets = $row['sets'];
   $reps = $row['reps'];

   if ($muscle_group == 'Biceps' || 'Triceps') {
      echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }


   // echo "<p><strong>$muscle_group $workout_name $sets</strong> - \"$reps\"<p>";
   }
   echo '</div>';
?>

</body>
</html>