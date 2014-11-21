<?php
include_once "../Model/dbconnection.php";
include_once "../Model/login.php";

if (isset($_POST['login']))
	{
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		$is_valid_user = login_user($userName,$password);
		if($is_valid_user==FALSE){
			include 'loginerror.html.php';
			exit();
		}
		else{
			session_start();
			$_SESSION['id']=$is_valid_user['userId'];
			header ('location: http://localhost/jobportal/index.php');
		}
	}
	include "form.html.php";
?>