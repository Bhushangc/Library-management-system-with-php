<?php require('connection.php');
    session_start();
    $id = $_SESSION['user_id'];
    $time = time();
    $date = date("Y/m/d");
    $query = mysqli_query($connection , "Select user_name from user where id = '$id'");
    $row = mysqli_fetch_array($query);
    $user_name = $row['user_name'];
    $log = mysqli_query($connection , "Insert into log values('','$user_name','$time','$date','logout')");
    if(isset($_SESSION['user_id'])){
        session_destroy();
        header("Location: login.php");

    }
?>