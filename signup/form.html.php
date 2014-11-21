<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>
 


  <body>

<?php

  include "../includes/header.inc.php";

?>

 <!-- <ul class="nav nav-tabs">
  <li role="presentation" ><a href="#"><span class="../Fonts/glyphicon glyphicon-screenshot" aria-hidden="true"></a></li> -->
  <!-- <li role="presentation" class="active"><a href="index.html">jSTRIKE</a></li> -->
<!--   <li role="presentation" class="active"><a href="http://localhost/jobportal/jobs/">+JOB</a></li>
</ul> 
 -->


    <div class="container">
    

    <div class= "signup">
      <h2>Sign Up</h2>
      <form role="form" method="POST" action=".">
        
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
          <input type="text" class="form-control" id="name" name='userName' placeholder="Enter Name">
        </div>

        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
          

          <input type="email" class="form-control" id="email" name='userEmail' placeholder="Enter email" >
        </div>
        
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
          <!--<span class="input-group-addon">Password</span>-->
          <input type="password" class="form-control" id="pwd" name='password' placeholder="Enter password">
        </div>

        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span></span>
          
          <input type="password" class="form-control" id="rpwd" placeholder="Repeat password">
        </div>
       
        <button  type="submit" name="signup" "class="btn btn-default">Register
        <span class="glyphicon glyphicon-send" aria-hidden="true">
          
        </span>
        
        </button>
      
      </form>
     </div> 
    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="../Js/bootstrap.min.js"></script>-->
  </body>
</html>