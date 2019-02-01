<?php


session_start(); //会话开始

function confirm_logged_in(){

	if(!isset($_SESSION['user_id'])){
		redirect_to('admin_login.php');
	}
}

function logged_out(){
	session_destroy();//会话销毁
	redirect_to('../admin_login.php');
}