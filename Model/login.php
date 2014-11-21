	<?php

	include_once "../Model/signup.php";

	function login_user ($userName, $password)
	{
		$dbcon=create_connection();
		$select_query = "select * from user where userName='$userName' and password='$password'";
		$result = mysqli_query($dbcon, $select_query);
		$rowcount = $result->num_rows;
		if($rowcount==0){
			return FALSE;
		} 
		else {
			$userinfo=mysqli_fetch_array($result);
			return $userinfo;
		}
	}
	?>