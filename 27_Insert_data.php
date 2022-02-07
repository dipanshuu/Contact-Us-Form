<?php
$servername="localhost";
$username="root";
$password="";
$database="dbharry2";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was succesful"   ;
}
// $sql="CREATE TABLE `mytab2` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(11) NOT NULL ,  `class` VARCHAR(11) NOT NULL ,  `sec` VARCHAR(11) NOT NULL ,  `gender` VARCHAR(11) NOT NULL ,  `age` INT(11) NOT NULL ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB;";

$sql="INSERT INTO `mytab2` (`sno`, `name`, `class`, `sec`, `gender`, `age`) VALUES ('5', 'Ankit', 'Sixth', 'A', 'Male', '22');";
$result=mysqli_query($conn,$sql);
if($result){
    // die("Sorry we failed to connect:".mysqli_connect_error());
    echo"Record has been inserted succesfully<br>";
}
else{
    echo "Record has not been added succesfully";   ;
}
?>