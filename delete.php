<?php 
include("wwu_connection.php");
$id = $_GET['id'];
$query = "DELETE FROM HIRE WHERE id='$id'";
$data = mysqli_query($connection,$query);

if($data)
{
    echo "Record Deleted";
}
else {
    echo "Failed to delete";
}
?>