<?php


	function new_signup($userName, $userEmail, $password)
	{
		$dbcon =create_connection();
		$insert_query="insert into user(userName, password,userEmail) values('$userName','$password','$userEmail')";
		$result = mysqli_query($dbcon, $insert_query);
		// $select = "select * from user where 'userName'= '$userName'"; both are same
		// $result_new = mysqli_query($dbcon, $select);
		$select_query = "select * from user where userName= '$userName'";
		$select_result = mysqli_query($dbcon, $select_query);
		$signedup_user = mysqli_fetch_array ($select_result);
		return $signedup_user;

	}

?>
