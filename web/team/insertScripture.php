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


<form action = "insert06.php" method="POST">
   <input type="text" name="book">
   <input type="text" name="chapter">
   <input type="text" name="verse">
   <textarea rows="4" cols="50" name="content">Sample Text</textarea><br>


   <?php
      foreach ($db->query('SELECT * FROM topic') as $row) {

         $id = $row['id'];
         $name = $row['name'];

         echo "<input type = 'checkbox' name = '$name' id ='chkTopics$id' value = '$id'>";
         echo "<label for = 'chkTopics$id'>$name</label><br>";
      }
   ?>

   <input type="submit" name="submit">


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