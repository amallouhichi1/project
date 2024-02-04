<?php

//start a session
session_start();

if($_POST){
include('database/connection.php');
$Email=$_POST['Email'];
$Password=$_POST['Password'];

$query='SELECT*FROM registration WHERE registration.Email="'.$Email. '"AND registration.Password="'.$Password .'"LIMIT 1'; 
$stmt=$conn->prepare($query);
$stmt->execute();

if($stmt->rowCount()>0){
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $user=$stmt->fetchAll()[0];
   $_SESSION['user']=$user;
   
   header('Location: Dashboard.php');

}else $error_message='please make sure your infos are correct';


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.login.css">
    <title>Login</title>
 </head>
 <body>

 <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="row border rounded-5 p-3 bg-white shadow box-area">
 <!-----------left box-->
  <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #096c87;">
  <div class="featured-image mb-3">
    <img src="images/1.png" class="img-fluid" style="width: 2500px;">
  </div>
  <p class="text-white fs-2 text-center" style="font-family:'Courier New', Courier, monospace; font-weight: 600;" >Sales Order Automation</p>
 <small class="text-white text-wrap text-center " style="font-family: 'Courier New', Courier, monospace;">Join us and keep your sales on track.</small>
  </div>
 <!---------right box-->
  <div class="col-md-6 right-box">
<div class="row align-items-center">
   <div class="header-text mb-4">
      <p>We are happy to have you Here.</p>
   </div>
   <form action="login.php" method="POST">
   <div class="input-group mb-3">
      <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Email Address" name="Email">
   </div>
   <div class="input-group mb-1">
      <input type="password" class="form-control form-control-lg gb-light fs-6" placeholder="Password" name="Password">
   </div>
   <div class="input-group mb-5 d-flex justify-content-between">
      <div class="form-check">
         <input type="checkbox" class="form-check-input" id="formCheck">
         <label for="formCheck" class="form-check-label text-secondary"><small>Remeber Me</small></label>     
      </div>
      <div class="forgot">
         <small><a href="#">Forgot Password?</a></small>
      </div>
   </div>
   <div class="input-group mb-3">
      <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
   </div>
   </form>
   <div class="input-group mb-3">
      <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width: 20px" class="me-2"><small>Sign in</small></button>
   </div>
   <div class="row">
      <small>Don't have account? <a href="signup.php" style="text-decoration:none">Sign UP</a></small>
      <small><a href="index.php" style="text-decoration:none" >back</a></small>
   </div>
</div>
  </div>

  </div>
 </div>
 </body>
</html>
