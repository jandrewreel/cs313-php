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

<h1>Scripture Resources</h1>

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