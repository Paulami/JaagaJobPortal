<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../fonts/glyphicons-halflings-regular.ttf">
  </head>

  
<body>
<?php

  include "../includes/header.inc.php";

?>
      <form action="." method="POST">
            <fieldset>
              <legend class="legend">LOGIN</legend>
                <!-- <label for="userName">User Name</label> -->
                <img class="log" src="../Images/user-01-128.png" ><br/><input class="loginName" type="text" name="userName" placeholder=" User Name"><br/><br/>
                <!-- <label for="passWord">Password</label> -->
                <img class="log" src="../Images/Security-Key-icon.png" ><br/><input class="passWord" type="password" name="password" placeholder=" Password"><br/><br/>


<!--                   <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                  </button> -->

                  <div>
                  <button type="submit" name="login" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
                  </button>

                  <span class="register"><label>New User?</label>
                   <!-- <button class="classRegister" type="button"><img src="images.png"></button> -->
                   <button onclick="location.href = 'http://localhost/jobportal/signup/';" type="button" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </button>


                 </span>
                   
                 </div>

            </fieldset>  

      </form> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>