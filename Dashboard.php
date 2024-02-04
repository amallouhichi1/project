<?php

//start a session
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');
$user=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
   <link rel="stylesheet" type="text/css" href="style.dashboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>
<div class="dashboardMainContainer">
<?php include('partials/app-sidebar.php')?>
<div class="dashboard_container" id="dashboard_container">
<?php include('partials/app-topNav.php')?>
<div class="dashboard_content" id="dashboard_content">
    <div class="dashboard_content_main">

    </div>
</div>
</div>
</div>

<script src="js/script.js"></script>

</body>
</html>