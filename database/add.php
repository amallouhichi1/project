<?php
session_start();

$table_name=$_SESSION['table'];
$Noun=$_POST['Noun'];
$Prenoun=$_POST['Prenoun'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$encrypted=password_hash($Password,PASSWORD_DEFAULT);
try{
$command="INSERT INTO 
                   $table_name(Noun,Prenoun,Email,Password) 
                   VALUES 
                      ('".$Noun."','".$Prenoun."','".$Email."','".$Password."')";


include('connection.php');


$conn->exec($command);
$response=[
    'success'=>true,
    'message'=> $Noun.' '.$Prenoun.' successfully added to the system'
];
} catch (PDOException $e) {
    $response=[
        'success'=>false,
        'message'=> $e->getMessage()
    ];
}
$_SESSION['response']=$response;
header('location: ../user-add.php');
?>