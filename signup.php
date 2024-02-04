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
   <form action="connect.php" method="post">
   <div class="input-group mb-2">
      <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Noun" name="Noun">
    </div>
   <div class="input-group mb-2">
      <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Prenoun" name="Prenoun">
   </div>
   <div class="input-group mb-1">
      <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Number" name="Number">
   </div>
   <div class="input-group mb-1">
    <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Email" noun="Email">
 </div>
 <div class="input-group mb-1">
    <input type="password" class="form-control form-control-lg gb-light fs-6" placeholder="Password" noun="Password">
 </div>
 <div class="input-group mb-1">
    <input type="password" class="form-control form-control-lg gb-light fs-6" placeholder="Re-write Password" noun="Re-write Password">
 </div>
 <br>
 <br>
   <input type="submit" class="btn btn-primary">
</form>
   
   
</div>
  </div>

  </div>
 </div>
 </body>
</html>