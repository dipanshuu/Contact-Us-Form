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
// echo "Connection was succesful";
?>