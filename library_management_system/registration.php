<?php require('connection.php');
  if (isset($_POST["user_name"]) &&  isset($_POST["phone"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["address"]) && isset($_POST["password_re"]) &&  isset($_POST["user_type"]) &&  isset($_POST["select_question"]) &&  isset($_POST["answer"]) &&  (isset($_POST["password"]))){
      $user_name = $_POST["user_name"];
      $password = $_POST["password"];
      $phone = $_POST["phone"];
      $user_type = $_POST["user_type"];
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $address = $_POST["address"];
      $password_re = $_POST["password_re"];
      $select_question = $_POST["select_question"];
      $answer = $_POST["answer"];
      $salt = "askfalf23";
      $passwordsalt = $password.$salt;
      $password_re = $password_re.$salt;
      $hash_password = password_hash($passwordsalt, PASSWORD_BCRYPT);
 
      $number = preg_match('@[0-9]@', $password);
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      $specialChars = preg_match('@[^\w]@', $password);
      
      if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "<script> alert('Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.'); </script>";
      
      } else {
        if($passwordsalt == $password_re){
          $duplicate = mysqli_query($connection , "SELECT * FROM user WHERE user_name='$user_name'");
          if(mysqli_num_rows($duplicate) > 0){
              echo "<script> alert('Username is already taken'); </script>";
          }
          else{
              $query = "Insert into user values('','$user_name','$phone','$hash_password', '$user_type','$first_name','$last_name','$address','$select_question','$answer','0');";
              mysqli_query($connection,$query);
              header("Location: login.php");
          }
        }
        else{
          echo "<script> alert('Password and Conform Password did not match'); </script>";
  
        }

      } 
  }

?>
<html>
  <head>
   <title>Registration</title>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
        <h1>Registration</h1>
        <form action = "registration.php" method= "post">
          <input type = "text" name = "first_name" placeholder="First Name" pattern="^[a-zA-Z]+$" required> 
          <input type = "text" name = "last_name" placeholder="Last Name" pattern="^[a-zA-Z]+$" required> <br>
          <input type = "text" name = "address" placeholder="Address" required><br>
          <input type = "text" name = "phone" placeholder="Phone" required><br>
          <input type="text" name="user_name" placeholder="Username" required><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <input type="password" name="password_re" placeholder="Conform Password" required><br>
          <input type="radio" name="user_type" value="Student" required> Student
          <input type="radio" name="user_type" value="Staff" required> Staff<br>
          <label for="select_question">Select a question:  </label>
          <select name="select_question" required>
           <option value="1">What is your favourate Book?</option> 
           <option value="2">What is your favourate Movie?</option> 
           <option value="3">What is your favourate Song?</option> 
           <option value="4">What is your favourate Sport?</option> 
          </select><br>
          <input type = "text" name = "answer" placeholder="Answer" required>
        
        <br><br><input type="submit" name="signup_submit" value="Sign Up" />


        </form>
        <p>Already have an account? <a href=login.php>Login</a> </p>
   </body>
  
</html>