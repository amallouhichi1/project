<?php

//start a session
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');
$_SESSION['table']='registration';
$user=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
   <link rel="stylesheet" type="text/css" href="style.dashboard.css">
   <link rel="stylesheet" href="partials/font-awesome/css/font-awesome.min.css"> 

</head>
<body>
<div class="dashboardMainContainer">
<?php include('partials/app-sidebar.php')?>
<div class="dashboard_container" id="dashboard_container">
<?php include('partials/app-topNav.php')?>
<div class="dashboard_content" id="dashboard_content">
  

        <div class="dashboard_content_main"  >
        <div id="userAddFormContainer">
        <form action="database/add.php" method="POST" class="appForm" >
            <div class="appFormInputContainer">
                <label for="Noun">Noun</label>
                <input type="text" class="appFormInput" id="Noun" name="Noun"/>
            </div>
            <div class="appFormInputContainer">
                <label for="Prenoun">Prenoun</label>
                <input type="text" class="appFormInput" id="Prenoun" name="Prenoun"/>
            </div>
            <div class="appFormInputContainer">
                <label for="Email">Email</label>
                <input type="text" class="appFormInput" id="Email" name="Email"/>
            </div>
            <div class="appFormInputContainer">
                <label for="Password">Password</label>
                <input type="Password" class="appFormInput" id="Password" name="Password"/>
            </div>
            <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add User</button>
         </form>
         <?php 
         if(isset($_SESSION['response'])) {
            $response_message=$_SESSION['response']['message'];
            $is_success=$_SESSION['response']['success'];

            ?>
            <div class="responseMessage">
                <p style="font-size: 18px;text-align: center;width: 95%;margin: 10px;background: #e4ede436;padding: 20px;" class="responseMessage  <?= $is_success ? 'responseMessage__success':'responseMessage__error' ?>">
            <?= $response_message ?>
            </p>
             </div>
            <?php unset($_SESSION['response']);}?>
        </div>
        
    </div>
        </div>
        
    </div>
</div>
</div>
</div>

<script src="js/script.js"></script>
</body>
</html>