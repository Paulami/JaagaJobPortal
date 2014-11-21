<!DOCTYPE HTML>
<html>
    
    <head>
      
      <meta name="viewport" content="width=device-width, initial scale=1">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/job.css">
      
    </head>

<?php
    
  include"../includes/header.inc.php";

?>
   <body>
<h1> <?php echo $jobdetail['jobtitle']; ?> </h1>
<h2><?php echo $jobdetail['jobdesc']; ?></h2>
<h2><?php echo $jobdetail['salary']; ?></h2>
</body>
</html>