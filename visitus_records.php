<html>
    <head>
        <title>Records display</title>
</head>

<body>
    <table border ="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
</tr>
<?php 
error_reporting(0);
include("contactserver.php");
$query="SELECT * FROM CONTACTINFO";
$data = mysqli_query ($conn,$query);
$total=mysqli_num_rows($data);

if ($total!=0)
{
   
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['subject']."</td>
        <td>".$result['message']."</td>
        </tr>
        ";
    }
   //echo "table has records";
}
else
 {
    echo "no records found";
}
?>
</table>
</body>
</html>