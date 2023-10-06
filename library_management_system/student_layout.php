<?php require('connection.php');
if(!isset($_SESSION)) 
{ 
  session_start(); 
  $inactive = 600;
  $time_check = $_SESSION['time'] + $inactive;
  //$_SESSION['expire'] = time() + $inactive;
  if(time() > $time_check){
    header ('Location:logout.php');
  }
}

 if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $query = mysqli_query($connection,"SELECT * FROM user WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    $settings = mysqli_query($connection, "SELECT * FROM settings WHERE user_id = '$id'");
    $settings_row = mysqli_fetch_array($query);
    $user_type = $row['user_type'];
    if ($user_type == 'Student'){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <?php while($settings_row = mysqli_fetch_array($settings)){
          if($settings_row['font_size'] == "3"){ ?>
            <style>
              table{
                font-size: large;
              }
              h1{
                font-size: 65px;
              }
          </style>

        <?php  }
          elseif(($settings_row['font_size'] == "1")){?>
            <style>
                table{
                  font-size: small;
                }
                h1{
                  font-size: 30px;
                }
            </style>
     

          <?php }
          elseif($settings_row['font_size'] == "2"){ ?>
            <style>
            table{
              font-size: medium;
            }
            h1{
              font-size: 50px;
            }
        </style>


          <?php }
        if($settings_row['theme'] == "2"){ ?>
          <style>
              body{
                background-color: #1b1b1b;
                color: #F0EAD6;
              }
          </style>

        <?php } 
        }
        ?>
        <style>
          body{
            margin: 20px;
          }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="student_home.php">Library Management System</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="student_home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My books
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="my_books.php">Request</a>
                <a class="dropdown-item" href="my_books_return.php">Return</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="student_history.php">My History <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="log_student.php">My Log <span class="sr-only">(current)</span></a>
            </li>
          
          </ul>
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $row['user_name']; ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="settings.php">Settings</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
          </div>

    </div>
  </nav>
    </body>
    </html>
<?php  
    }
    else{
        header ('Location:logout.php');
    }

}
else{
    header ('Location:login.php');
}
?>


