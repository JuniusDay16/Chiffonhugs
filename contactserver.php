<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
    //echo "Connection established !";
}
else 
{
    echo "Connection Failed :( ".mysqli_connect_error();
}


?>












