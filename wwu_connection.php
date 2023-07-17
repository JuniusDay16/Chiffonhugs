<?php 
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$databname = "workwithus";

$connection = mysqli_connect($servername,$username,$password,$databname);

if($connection)
{
    //echo "connection succesfull!";
}
else {
    echo "connection failed".mysqli_connect_error();
}
?>