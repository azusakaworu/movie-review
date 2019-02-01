<?php require_once('admin/scripts/config.php');//read.php

if(isset($_GET['id'])){

	$tbl = 'tbl_movies';
	$col = 'movies_id';
	$value = $_GET['id'];

	$results = getSingle($tbl,$col,$value);

}else{
	
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>movie-review-details.php</title>
</head>
<body>

	<?php include('templates/header.html');?> 
<!--外部header.html 可随时更新外部header 不用每一页改-->
   <h1>this si the movie site</h1>

<div>
	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>

          <h2><?php echo $row['movies_title'];?></h2>
 
<?php endwhile;?>
</div>



<?php include('templates/footer.html');?>
<!--外部footer.html 可随时更新外部footer 不用每一页改-->
</body>
</html>