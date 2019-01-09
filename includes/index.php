<?php require_once('includes/read.php');?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>movie-review</title>
</head>
<body>
   <h1>this si the movie site</h1>



<?php
$results = getAll('tbl_movies');

while($row = $results->fetch(PDP::FETCH_ASSOC)){
  echo '<li>'.$row['movies_title'].'</li>';
}

?>
</body>
</html>