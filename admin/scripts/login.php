<?php

//这个放在script folder 里

function login($username,$password){
  // echo $username;
  // echo $password;

  // return 'Login succsessful';

	require_once('connect.php');
	//检查username是否存在
	$check_exist_query = 'SELECT count(*) FROM tbl_user';
	//$check_exist_query .= ' WHERE user_name = "'.$username.'"';
	$check_exist_query .= ' WHERE user_name = :username';
	echo $check_exist_query."<br>";

	//$user_set = $pdo ->query($check_exist_query);
     $user_set = $pdo ->prepare($check_exist_query);
     $user_set->execute(
            array(
            	':username'=>$username
            )
     );

	if($user_set->fetchColumn()>0){
		echo "user exits";
	}
}


?>