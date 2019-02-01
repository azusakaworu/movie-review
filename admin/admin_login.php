<?php require_once('scripts/config.php');
//var_dump($_POST);

if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];
	    $message = login($username,$password,$ip);

	
}else{
	if(isset($_POST['username']) ||isset($_POST['password'])){
		$message ='fill the required fileds';
	}
	
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin logoin</title>
</head>
<body>
	<?php if(!empty($message)):?>

	<p><?php echo $message;?></p>
    <?php endif; ?>

	<form action="admin_login.php" method="post">
		<!-- action data去向  method post 简短URL-->
		<label>username:
			<input type="text" name="username" value="" required>
		</label>
        <br>
		<label>password
			<input type="password" name="password" required>
		</label>
		<br>
        <button type="submit">submit</button>
        <!-- 用 input 弄submit 跟button有啥区别
        <input type="submit" value="submit"> -->

	</form>

</body>
</html>