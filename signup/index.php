<?php
	// ob_start();
	include_once "../Model/dbconnection.php";
	include_once "../Model/signup.php";

	if (isset($_POST['signup']))
	{
		$userName = $_POST['userName'];
		$userEmail =$_POST['userEmail'];
		$password = $_POST['password'];
		$userinfo = new_signup($userName, $userEmail, $password);
		session_start();
		$_SESSION['id'] = $userinfo['userId'];
		header('Location: http://localhost/jobportal/index.php');

	}
	
	include "form.html.php";
?>