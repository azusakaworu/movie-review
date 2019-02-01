<?php require_once('admin/scripts/config.php');//read.php
if(isset($_GET['filter'])){

	$tbl = 'tbl_movies';
	$tbl_2 = 'tbl_genre';
	$tbl_3 = 'tbl_mov_genre';
	
	$col = 'movies_id';
	$col_2 = 'genre_id';
	$col_3 = 'genre_name';
	$filter = $_GET['filter'];
	
	
	$results = filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter);

}else{
	 $results = getAll('tbl_movies'); 
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>movie-review-class</title>
</head>
<body>

	<?php include('templates/header.html');?> 
<!--外部header.html 可随时更新外部header 不用每一页改-->
   <h1>this si the movie site</h1>


<ul>
<?php while($row = $results->fetch(PDO::FETCH_ASSOC)): ?>


<!--  <h2><?php echo $row['movies_title'];?></h2> -->

 <img  src="images/<?php echo $row['movies_cover'];?>" 
       alt="<?php echo $row['movies_title'];?>"  
       id="imgs">


 <h2><?php echo $row['movies_title'];?></h2>
 <p><?php echo $row['movies_storyline'];?></p>
 <a href="details.php?id=<?php echo $row['movies_id'];?>">read more</a>

<?php endwhile;?>

</ul>






<?php include('templates/footer.html');?>
<!--外部footer.html 可随时更新外部footer 不用每一页改-->
</body>
</html>