<?php require('connection.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
    $inactive = 300;
    $_SESSION['expire'] = time() + $inactive;
    if(time() > $_SESSION['expire']){
      header ('Location:logout.php');
    }
}
if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $query = mysqli_query($connection,"SELECT * FROM user WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    $user_type = $row['user_type'];
    if ($user_type == 'Staff'){
        require('staff_layout.php');

    }
    if ($user_type == 'Student'){
        require('student_layout.php');

    }
    if ($user_type == 'admin'){
        require('admin_layout.php');

    }
}
?>
<style>
    #profile{
        background-color: #faf0e6;
        border: 5px solid;
        width: 800px;
        height: 450px;
        position: absolute;
        top: 20%;
        left: 25%;
    }
    #heading{
        margin-left: 40%;
        margin-top: 25px;
        margin-bottom: 25px;
    }
    #lable{
        margin-left: 20px;
        font-size: 30px;
    }
</style>
<div id="profile">
<h1 id="heading">Profile</h1>
    <div id="lable">
        <label> User Name: </label>
        <?php echo $row['user_name']; ?> <br>
        <label> First name: </label>
        <?php echo $user_type = $row['first_name']; ?> &nbsp;&nbsp; &nbsp;&nbsp;
        <label> Last name: </label>
        <?php echo $user_type = $row['last_name']; ?><br>
        <label> Address: </label>
        <?php echo $user_type = $row['address']; ?><br>
        <label> Phone Number: </label>
        <?php echo $user_type = $row['phone']; ?><br>
        <a href="password_change.php"><button>Change password</button></a>
    </div>
</div>