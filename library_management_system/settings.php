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
 
    if(isset($_POST['font_size'])){
        $font_size = $_POST['font_size'];
        $check = mysqli_query($connection,"SELECT * FROM settings WHERE user_id='$id'");
        if(mysqli_num_rows($check) > 0){
            $query_settings = mysqli_query($connection,"UPDATE settings SET font_size = '$font_size';");
            header ('Location:settings.php');
            //mysqli_query($connection,$query_settings);
        }
        else{    
            $query_settings = mysqli_query($connection,"Insert into settings values('','$id','$font_size','1');");
            //mysqli_query($connection,$query_settings);
            header ('Location:settings.php');
        }
    }
    if(isset($_POST['theme']) ){
        $theme = $_POST['theme'];
        $check = mysqli_query($connection,"SELECT * FROM settings WHERE user_id='$id'");
        if(mysqli_num_rows($check) > 0){
            $query_settings = mysqli_query($connection,"UPDATE settings SET theme = '$theme';");
            header ('Location:settings.php');
            //mysqli_query($connection,$query_settings);
        }
        else{    
            $query_settings = mysqli_query($connection,"Insert into settings values('','$id','2','$theme');");
            //mysqli_query($connection,$query_settings);
            header ('Location:settings.php');
        }

    } 
}
?>
<h1>Settings</h1>
<form method="post" action="settings.php">
    <Label for="font_size">Font Size</Label>
    <select name="font_size" required>
         <option disabled selected>Select font Size</option>
        <option value="1">Small</option> 
        <option value="2">Medium</option> 
        <option value="3">Large</option> 
    </select>  &nbsp;&nbsp;
    <input type="submit" value="save">
</form>
<form method="post" action="settings.php">
    <Label for="theme">Theme</Label>
    <select name="theme" required required>
        <option selected disabled>Select theme</option>
        <option value="1">Light</option> 
        <option value="2">Dark</option> 
    </select> &nbsp;&nbsp;
    <input type="submit" value="save">
</form>