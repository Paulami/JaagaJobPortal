<?php

function get_all_jobs()
	{
		$dbconnec = create_connection();
		$select = "select * from jobs";
		$result = mysqli_query($dbconnec, $select);
		return $result;
	}

	function add_job($jobtitle, $jobdesc, $salary)
	{
		$dbcon=create_connection();
		$insert_query = " insert into jobs (jobtitle, jobdesc, salary ) VALUES ('$jobtitle','$jobdesc','$salary')" ;
		$result = mysqli_query($dbcon, $insert_query);
		return $result;
		}

	function get_a_job($job_id){
		$dbcon=create_connection();
		$select_query = "select * from jobs where id = '$job_id'";
		$result = mysqli_query($dbcon, $select_query);
		$jobdetail = mysqli_fetch_array($result);
		return $jobdetail;
	}
?>