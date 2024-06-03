<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
   header("location: login.php");
   exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

 <style>
body{
  background-image: url("sunsetimg.png");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>

<body>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php $_SESSION['Username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="http://localhost/Homepage/admin.php"> 
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
 
    <div class="container my-1">
      <div class="alert alert-success" role="alert"> 
     <h4 class="alert-heading"><i>Welcome </i><?php echo  $_SESSION['Username']?></h4>
       <p><h4><i>Welcome to Audit Master....How are you?? You logged in as</i></h4><?php echo  $_SESSION['Username']?></p>
     <hr>
     
     
   
     <p class="mb-0">Whenever you need to enter as user  <a href="http://localhost/Harry/partials/_nav1.php">Using this link</a></p>
     <br>
     <hr>

     <p class="mb-0">Whenever you need to enter in admin page <a href="http://localhost/Harry/admin.php">Using this link</a></p>
    
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
    
</body>
</html>