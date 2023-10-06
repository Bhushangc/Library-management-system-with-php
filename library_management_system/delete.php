<?php require('connection.php');
$id =$_GET["id"];
$query = "DELETE FROM books where id = '$id'";
if ($connection->query($query) ==TRUE) {
    header ('Location:fetch_books.php');
    
}
else
{
    echo $connection->error;
}
?>
