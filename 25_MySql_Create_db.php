<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was succesful"   ;
}
$sql="CREATE DATABASE dbHarry2";
mysqli_query($conn,$sql);

// echo "Connection was succesful";
?>