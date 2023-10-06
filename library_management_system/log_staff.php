<?php require('connection.php');
require('staff_layout.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <h1>Log Data</h1>
        <thead class="thead-light">
            <tr>
                <td>User Name</td>
                <td>Time</td>
                <td>Date</td>
                <td>Status</td>
            </tr>
        </thead>
        <?php 
        $username = $row['user_name'];
        $log = mysqli_query($connection,"SELECT * FROM log where user_name = '$username'");
        while($row = mysqli_fetch_array($log)){ ?>
        <tr>
            <td><?php echo $row["user_name"]; ?> </td>
            <td><?php echo $row["time"]; ?> </td>
            <td><?php echo $row["date"]; ?> </td>
            <td><?php echo $row["status"]; ?> </td>
            
       </tr>
       <?php } ?> 
    </table>
    
</body>
</html>