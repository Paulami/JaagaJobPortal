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

      <div>
       <form action="." method="POST">
        
         
         <legend>POST A JOB</legend>  
         </br>
         <label  for="jobtitle_label">JOB TITLE</label>
         <input class='jobtitle' type="text" name="jobtitle" placeholder="Summary of the job">
         </br>
         <label for="jobdesc">DESCRIBE</label>
         <input class='jobdesc' type="text" name="jobdesc" placeholder="Describe the job">
         </br>
         <label for="budget_label">SALARY</label>
         <input class='salary' type="salary" name="salary" placeholder="What does this job pay?">
         <br></br>
         <button class='signup' type="submit" name="create" >CREATE JOB</button>
      
      </form>
</div>
   </body>

</html>