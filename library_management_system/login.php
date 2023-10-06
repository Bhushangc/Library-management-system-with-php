<?php require('connection.php');
    if (isset($_POST["user_name"])  &&  (isset($_POST["password"]))){
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $salt = "askfalf23";
        $password = $password.$salt;

        $result = mysqli_query($connection , "SELECT * FROM user WHERE user_name='$user_name'");

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $password_verify = $row['password'];
            $user_type = $row['user_type'];
            
            if (password_verify($password, $password_verify)){
               if($row['verify'] ==1){
                  $user_id = $row['id'];
                  session_start();
                  $_SESSION['user_id'] = $user_id;
                  $time = time();
                  $date = date("Y/m/d");
                  $_SESSION['time'] = $time;
                  $log = mysqli_query($connection , "Insert into log values('','$user_name','$time','$date','login')");
                  if($user_type == 'Staff'){
                     header ('Location:fetch_books.php');
                  }
                  elseif($user_type == 'Student'){
                     header ('Location:student_home.php');
                  }
                  elseif($user_type == 'admin'){
                     header ('Location:admin_home.php');
                  }
               }
               else{
                  echo "<script> alert('User not verified yet wait for verification'); </script>";

               }
          
              
            }
            else{
               echo "<script> alert('Incorrect password'); </script>";
                
            }
            
        }
        else{
            echo "<script> alert('Incorrect username'); </script>";
        }

    }

?>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login
         </div>
         <form action = "login.php" method= "post">
            <div class="field">
               <input type="text" name="user_name" required>
               <span class="fas fa-user"></span>
               <label>User Name</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <div class="forgot-pass">
               <a href="password_change.php">Forgot Password?</a>
            </div>
            <button type="submit">Sign in</button>
            <div class="sign-up">
               Not a member?
               <a href="registration.php">signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>