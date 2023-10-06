<?php require('connection.php');
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "UPDATE order_book  SET request_book = 0 WHERE id ='$id';";
    mysqli_query($connection, $query);
}
?>
<script> 
alert("Request accpted");
window.location.href = "user_request.php";
</script>
