<?php

//这个放在script folder 里

function login($username,$password,$ip){
  // echo $username;
  // echo $password;

  // return 'Login succsessful';

	require_once('connect.php');
	//检查username是否存在
	$check_exist_query = 'SELECT count(*) FROM tbl_user';
	//$check_exist_query .= ' WHERE user_name = "'.$username.'"';
	$check_exist_query .= ' WHERE user_name = :username';
	//echo $check_exist_query."<br>";

	//$user_set = $pdo ->query($check_exist_query);
     $user_set = $pdo ->prepare($check_exist_query);
     $user_set->execute(
            array(
            	':username'=>$username
            )
     );

	if($user_set->fetchColumn()>0){
		//echo "user exits";
		$get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';
		$get_user_set = $pdo -> prepare($get_user_query);
		$get_user_set -> execute(
			array(
				':username' => $username,
				':password' => $password
			)
		);


		while($found_user = $get_user_set -> fetch(PDO::FETCH_ASSOC)){
			$id = $found_user['user_id'];
			$_SESSION['user_id'] =$id;
			$_SESSION['user_name'] = $found_user['user_name'];

			$update_ip_query ='UPDATE  tbl_user SET user_id=:ip WHERE user_id = :id';
			$update_ip_set=$pdo->prepare($update_ip_query);
			$update_ip_set->execute(
				array(
					':ip' => $ip,
					':id' =>$id
				)


			);
		}

		if(empty($id)){
			$message =  'login fields';
			return $message;
		}


		redirect_to('index.php');
	}else{
		$message= 'User does not exists';
		return $message;
	}
}


?>