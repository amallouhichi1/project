<?php
$servername='localhost';
$Email='root';
$Password='';



//connecting the database
try{
   $conn=new PDO("mysql:host=$servername;dbname=test1",$Email,$Password);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo 'Connected Successfully';
}catch(\Expection $e){

}
?>