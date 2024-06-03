<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  $Confirm_password = $_POST["Confirm_password"];
  $exists=false;
  if(($Password == $Confirm_password) && $exists==false){
    $sql = "INSERT INTO signup(Username, Password, Confirm_password) VALUES ('$Username', '$Password', '$Confirm_password')";
    
      $result = mysqli_query($conn,$sql);
      if ($result){
        $showAlert = true;
      }
        
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    

</head>
<body>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    
    <?php
    if($showAlert){
    echo  '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your account is created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;
        </button>
    </div>';
    }
    ?>
   
    <div class="container my-4">
      <h1 class="text-center">Signup to Audit Master</h1>
      <form action="" method="post">

  <div class="from-group col-md-6">
    <label for="Username" class="form-label"><a href="http://localhost/php/print.php"></a>Username</label>
    <input type="text" class="form-control" id="Username"  name="Username" aria-describedby="emailHelp">
  </div>

  <div class="from-group col-md-6">
    <label for="Password" class="form-label"><a href="http://localhost/php/print.php"></a>Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>

  <div class="from-group col-md-6">
    <label for="Confirm_password" class="form-label"><a href="http://localhost/php/print.php"></a>Confirm_Password</label>
    <input type="password" class="form-control" id="Confirm_password" name="Confirm_password">

    <small id="emailHelp" class="from-text text-muted">Make sure that the password must be same</small>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary col-md-6">Sign Up</button>
 
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
    
</body>
</html>