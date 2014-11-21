<?php

	include_once "../Model/dbconnection.php";
	include_once "../Model/jobs.php";
	session_start();
	
if(isset($_POST['create'])){
$jobtitle= $_POST['jobtitle'];
$jobdesc= $_POST[ 'jobdesc'];
$salary= $_POST['salary'];
$insert= add_job($jobtitle,$jobdesc,$salary);
header("Location: ../index.php");
}
if(isset($_GET['details'])){
	$jobdetail = get_a_job($_GET['details']);
	include "detail.html.php";
	exit();
}
include_once "form.html.php";
?>