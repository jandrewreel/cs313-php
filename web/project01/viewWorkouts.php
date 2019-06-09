<?php
   require 'connectDb.php';
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" type="text/css" href="p01.css">
</head>
<body>
   <div class="header">
      <?php include 'header.php'; ?>
   </div>

   <div class="mainBody">
      <h1>Workout Exercises:</h1><hr>

      <?php

      //Chest Column
      echo '<div class="column"><h2>Chest</h2>';

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
            echo "<p>$workout_name : $sets sets - $reps reps<p>";
         }

      }
      echo '</div>';

      //Back Column
      echo '<div class = "column"><h2>Back</h2>';

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
            echo "<p>$workout_name : $sets sets - $reps reps<p>";
         }

      }
      echo '</div>';

      //Legs Column
      echo '<div class="column"><h2>Legs</h2>';

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
            echo "<p>$workout_name : $sets sets - $reps reps<p>";
         }

      }
      echo '</div>';


      //Arms Column
      echo '<div class="column"><h2>Arms</h2>';

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

         if ($muscle_group == 'Biceps')
         {
            echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
         }
         if ($muscle_group == 'Triceps')
         {
            echo "<p>$muscle_group $workout_name : $sets sets - $reps reps<p>";
         }

      }
      echo '</div>';
   ?>

   <br>
   <hr>

   </div>

<div class="formStyle">
   <h2 style="text-align: center">Create a Workout:</h2>
   <hr>
   <div class="content">
   <form action = "insertDb.php" method="POST">
   <input type="radio" name="muscle" value="Chest">Chest
   <input type="radio" name="muscle" value="Back">Back
   <input type="radio" name="muscle" value="Legs">Legs
   <input type="radio" name="muscle" value="Biceps">Bicep
   <input type="radio" name="muscle" value="Triceps">Tricep
   <br><br>
   Workout Name:<input type="text" name="workoutName"><br>
   Sets:
   <select name="sets">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
   </select>

   Reps:
   <select name="reps">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
   </select>
   <br><br>
   <input type="submit" name="submit">
   </div>

</form>
</div>

</body>
</html>