<?php require('connection.php');
    if ( isset($_POST['submit']) ){
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $answer = $_POST["answer"];
        $select_question = $_POST["select_question"];
        $salt = "askfalf23";
        $passwordsalt = $password.$salt;
        $hash_password = password_hash($passwordsalt, PASSWORD_BCRYPT);

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            echo "<script> alert('Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.'); </script>";
          
          } else {

        $result = mysqli_query($connection , "SELECT * FROM user WHERE user_name='$user_name'");

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if($row['select_question'] == $select_question && $row['answer'] == $answer){
                $query = mysqli_query($connection,"Update user set password ='$hash_password' where user_name = '$user_name'; ");
                header ('Location:login.php');
            }
            else{
                echo "<script> alert('Incorrect Answer'); </script>";

            }

            
        }
        else{
            echo "<script> alert('Incorrect username'); </script>";
        }
    }

    }

?>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <style> 
   #select{
    height: 100%;
  width: 100%;
  padding-left: 45px;
  outline: none;
  border: none;
  font-size: 13px;
  background: #dde1e7;
  color: #595959;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #BABECC,
              inset -5px -5px 10px #ffffff73;
   }
</style>
    </head>
   <body>
      <div class="content">
         <div class="text">
            Change password
         </div>
         <form action = "password_change.php" method= "post">
            <div class="field">
               <input type="text" name="user_name" required>
               <span class="fas fa-user"></span>
               <label>User Name</label>
            </div>
            <div class="field">
                <select name="select_question" required class="field" id="select">
                    <option value="1">What is your favourate Book?</option> 
                    <option value="2">What is your favourate Movie?</option> 
                    <option value="3">What is your favourate Song?</option> 
                    <option value="4">What is your favourate Sport?</option> 
            </select><br>
            </div>
            <div class="field">
               <input type="text" name="answer" required>
               <label>Answer</label>
            </div>
            
            <div class="field">
               <input type="password" name="password" required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <button type="submit"  name="submit">Change Password</button>
         </form>
      </div>
   </body>
</html>