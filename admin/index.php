<?php
require_once('scripts/config.php');
confirm_logged_in();


?>
<!-- admin folder 代替includes folder 
admin包括scripts folder里面包括connect.php 和 index.php。 admin里面是index.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welcome to your admin panel</title>
</head>
<body>
	<h1>Admin dashboard </h1>
	<h3>wdlcome <?php echo $_SESSION['user_name']; ?>!!</h3>
   this is your admin dashboard page
   <nav>
   	<ul>
   		<li><a href="#">Create User</a></li>
   		<li><a href="#">Edit User</a></li>
   		<li><a href="#">Delete User</a></li>
   		<li><a href="scripts/caller.php?caller_id=logout">Sign out</a></li>
   	</ul>
   </nav>


   
</body>
</html>