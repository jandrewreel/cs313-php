<?php

   require 'connectDb.php';
   $db = get_db();


?>



<!DOCTYPE html>
<html>
<head>
   <title>Scripture List</title>
</head>

<body>
<div>

<h1>Insert Scripture</h1>


<form>
   <input type="text" name="book">
   <input type="text" name="chapter">
   <input type="text" name="verse">
   <textarea rows="4" cols="50">Sample Text</textarea>


   <?php
      foreach ($db->query('SELECT * FROM topic') as $row) {
         echo "<input type = 'checkbox' name = '$row['name']' id ='chkTopics$id' value = '$row['id']'>";

         echo "<label for = 'chkTopics$id'> $row['name']</label><br>";

      }



   ?>


</form>

<?php


   $statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
   $statement->execute();


   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
   // The variable "row" now holds the complete record for that
   // row, and we can access the different values based on their
   // name
   $book = $row['book'];
   $chapter = $row['chapter'];
   $verse = $row['verse'];
   $content = $row['content'];
   echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
   }

?>

</div>

</body>
</html>