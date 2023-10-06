<?php require('connection.php');
$id =$_GET["id"];
$query = "UPDATE user SET verify = '1' where id = '$id'";
if ($connection->query($query) ==TRUE) {
    header ('Location:users.php');
    
}
else
{
    echo $connection->error;
}
?>