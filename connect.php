<?php
$Noun=$_POST['Noun'];
$Prenoun=$_POST['Prenoun'];
$Number=$_POST['Number'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

//Database connection
$conn =new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect-error);
}else{
    $stmt= $conn->prepare("insert into registration(Noun,Prenoun,Number,Email,Password)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$Noun,$Prenoun,$Number,$Email,$Password);
    $stmt->execute();
    echo "registration Successfully....";
    $stmt->close();
    $conn->close();
}

?>