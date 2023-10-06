<?php require('connection.php');
session_start();
if(isset($_SESSION['user_id'])){
    if (isset($_GET["id"])){
        $book_id = $_GET["id"];
        $date = date("Y/m/d");
        $user_id = $_SESSION['user_id'];
        echo $user_id;
        $query = "Insert into order_book values('','$user_id','$book_id','1','0', '$date',NULL);";
        mysqli_query($connection, $query);
    }
}
?>
<script> 
    alert("!!!Request has been sent. You will hear from the staff.!!!");
    window.location.href = "student_home.php";
</script>
    
    

