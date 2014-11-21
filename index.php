<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/homepage.css">
</head>
<body>

<?php
  
  session_start();
  include "includes/header.inc.php";
  include_once "Model/dbconnection.php";
  include_once "Model/jobs.php";

?>

<div class="container-fluid">
  <?php $jobs=get_all_jobs(); ?> 
<h1 class="text-center">List of Jobs</h1>
<div id="listOfJobs" class="jobList">
<div class="row">
  <?php while($row = mysqli_fetch_array($jobs)){ ?>
    <div class="col-md-4 job-pin text-left">
      <h2 class="text-center text-success "><strong><?php echo $row['jobtitle']; ?></strong></h2>
      
      <p class="text-info text-center"> <mark><?php echo $row['jobdesc']; ?></mark></p>
<br>
      <a type="button" class=" text-center btn btn-success col-md-offset-3" href="/jobportal/jobs?details=<?php echo $row['id'];?>" >Details</a>
    </div>

  
 
  <?php } ?>
</div>
</div>
</div>
</body>
<script type="text/javascript" src="Js/jquery.js"></script>
<script type="text/javascript" src="Js/bootstrap.min.js"></script>
</html>