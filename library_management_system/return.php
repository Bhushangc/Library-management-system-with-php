<?php require('connection.php');
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $date = date("Y/m/d");
    $query = "UPDATE order_book  SET return_book = 1, return_date = '$date' WHERE id ='$id';";
    mysqli_query($connection, $query);
}
?>
<script> 
alert("Thank you for returning the book");
window.location.href = "student_home.php";
</script>