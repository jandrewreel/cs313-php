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

   //Chest Column
   echo '<div><h2>Chest</h2>';

   //Prepare and Execute Database
   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();

   //Loop through data
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $muscle_group = $row['muscle_group'];
      $workout_name = $row['workout_name'];
      $sets = $row['sets'];
      $reps = $row['reps'];

      if ($muscle_group == 'Chest')
      {
         echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
      }

   }
   echo '</div>';

   //Back Column
   echo '<div><h2>Back</h2>';

   //Prepare and Execute Database
   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();

   //Loop through data
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $muscle_group = $row['muscle_group'];
      $workout_name = $row['workout_name'];
      $sets = $row['sets'];
      $reps = $row['reps'];

      if ($muscle_group == 'Back')
      {
         echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
      }

   }
   echo '</div>';

   //Legs Column
   echo '<div><h2>Legs</h2>';

   //Prepare and Execute Database
   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();

   //Loop through data
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $muscle_group = $row['muscle_group'];
      $workout_name = $row['workout_name'];
      $sets = $row['sets'];
      $reps = $row['reps'];

      if ($muscle_group == 'Legs')
      {
         echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
      }

   }
   echo '</div>';


   //Arms Column
   echo '<div><h2>Arms</h2>';

   //Prepare and Execute Database
   $statement = $db->prepare("SELECT muscle_group, workout_name, sets, reps FROM workout");
   $statement->execute();

   //Loop through data
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $muscle_group = $row['muscle_group'];
      $workout_name = $row['workout_name'];
      $sets = $row['sets'];
      $reps = $row['reps'];

      if ($muscle_group == 'Biceps' || 'Triceps')
      {
         echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
      }

   }
   echo '</div>';
?>

</body>
</html>