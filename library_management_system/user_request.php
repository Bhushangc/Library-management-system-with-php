<?php require('connection.php');
require('staff_layout.php'); 
$query = mysqli_query($connection,"SELECT * FROM order_book where request_book ='1'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Request</title>
</head>
<body>
<table class="table table-striped table-bordered table-hover">
        <h1>My books</h1>
        <thead class="thead-light">
            <tr>
                <td>Name</td>
                <td>Author</td>
                <td>Genre</td>
                <td>Language</td>
                <td>Pages</td>
                <td>Publication Year</td>
                <td>Requested by</td>
                <td>Request Date</td>
                <td>Accept Request</td>
            </tr>
        </thead>
        <?php 
        while($row = mysqli_fetch_array($query)){
            $book_id = $row['book_id'];
            $user_id = $row['user_id'];
            $query_book = mysqli_query($connection,"SELECT * FROM books WHERE id='$book_id'");
            $query_user = mysqli_query($connection,"SELECT * FROM user WHERE id='$user_id'");
            $row_user = mysqli_fetch_array($query_user);
            while($row_book = mysqli_fetch_array($query_book)){

        ?>
        <tr>
            <td><?php echo $row_book["name"]; ?> </td>
            <td><?php echo $row_book["author"]; ?></td>
            <td><?php echo $row_book["genre"]; ?></td>
            <td><?php echo $row_book["language"]; ?></td>
            <td><?php echo $row_book["pages"]; ?></td>
            <td><?php echo $row_book["publication_year"]; ?></td>
            <td><?php echo $row_user["first_name"].$row_user["last_name"] ; ?></td>
            <td><?php echo $row["request_date"]; ?></td>
            <td><a href = "accept_request.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"> Accept </button></td>
            
       </tr>
       <?php } } ?> 
    </table>
    
</body>
</html>