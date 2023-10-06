<?php require('connection.php');
require('admin_layout.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <h1>User Data</h1>
        <thead class="thead-light">
            <tr>
                <td>User Name</td>
                <td>Phone</td>
                <td>Type</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Address</td>
                <td>Verification</td>
            </tr>
        </thead>
        <?php 
        $query = mysqli_query($connection,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){ ?>
        <tr>
            <td><?php echo $row["user_name"]; ?> </td>
            <td><?php echo $row["phone"]; ?> </td>
            <td><?php echo $row["user_type"]; ?> </td>
            <td><?php echo $row["first_name"]; ?> </td>
            <td><?php echo $row["last_name"]; ?> </td>
            <td><?php echo $row["address"]; ?> </td>
            <?php if($row["verify"] == 1){?>
                <td>Verified</td>
            <?php }
            else{?>
                <td><button type="button" class="btn btn-light"><a href="verify.php?id=<?php echo $row["id"] ?>">Verify User</a></button></td>
            <?php } ?>
            
       </tr>
       <?php } ?> 
    </table>
    
</body>
</html>