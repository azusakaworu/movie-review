<?php require_once('scripts/config.php');
//var_dump($_POST);

if(empty($_POST['username']) || empty($_POST['password'])){
	$message = 'missing fields';
}else{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$message = login($username,$password);
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin logoin</title>
</head>
<body>
	<form action="admin_logoin.php" method="post">
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