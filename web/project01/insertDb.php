<?php

   $muscle = $_POST['muscle'];
   $workoutName = $_POST['workoutName'];
   $sets = $_POST['sets'];
   $reps = $_POST['reps'];

   require("connectDb.php");
   $db = get_db();


   $query = 'INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES (:muscle, :workoutName, :sets, :reps)';
   $statement = $db->prepare($query);

   $statement->bindValue(':muscle', $muscle);
   $statement->bindValue(':workoutName', $workoutName);
   $statement->bindValue(':sets', $sets);
   $statement->bindValue(':reps', $reps);

   $statement->execute();

   $workoutId = $db->lastInsertId("workout_id_seq");

   // foreach ($topicIds as $topicId) {

   //    echo "ScriptureId: $scriptureId, topicId: $topicId";

   //    // Again, first prepare the statement
   //    $statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');

   //    // Then, bind the values
   //    $statement->bindValue(':scriptureId', $scriptureId);
   //    $statement->bindValue(':topicId', $topicId);


   //    $statement->execute();
   // }


   header("Location: home.php");

   die();

?>