<?php require('connection.php');
require('admin_layout.php'); 
$query = mysqli_query($connection,"SELECT * from user;");
$query2 = mysqli_query($connection,"SELECT * from books;");
?>
<h1> Number of Users: <?php echo mysqli_num_rows($query)?><h1>
<h1> Number of Books: <?php echo mysqli_num_rows($query2)?></h1>

