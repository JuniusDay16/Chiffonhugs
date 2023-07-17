
<html>
    <head>
        <title>Work with us display</title>
        <style>
            body
            {
                background: #ffd6ff;
            }
            table
            {
                background-color: white;
            }
            .update
            {
                background-color: green;
                color: white;
                border-radius: 5px;
                height: 25px;
                width: 80px;
                cursor: pointer;
            }
            .delete
            {
                background-color: red;
                color: white;
                border-radius: 5px;
                height: 25px;
                width: 80px;
                cursor: pointer;
            }
        </style>
</head>

<body>
    <h2 align="center">Displaying all records</h2>
    <center><table border ="2" cellspacing="7" width="97%">
        <tr>
            <th width="4%">ID</th>    
            <th width="10%">Firstname</th>
            <th width="10%">>Lastname</th>
            <th width="8%">>Gender</th>
            <th width="20%">>Email</th>
            <th width="10%">>Phone</th>
            <th width="25%">>Address</th>
            <th width="10%">>Operations</th>
</tr>
<?php 
error_reporting(0);
include("wwu_connection.php");
$query="SELECT * FROM HIRE";
$data = mysqli_query ($connection,$query);
$total=mysqli_num_rows($data);

if ($total!=0)
{
   
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>
        <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a><a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
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
</center>
<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record?');
    }
</script>
</body>
</html>