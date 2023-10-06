<?php require('connection.php');
require('student_layout.php');
$query = "SELECT * FROM books";
$result = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <h1>Books</h1>
        <thead class="thead-light">
            <tr>
                <td>Name</td>
                <td>Author</td>
                <td>Genre</td>
                <td>Language</td>
                <td>Pages</td>
                <td>Publication Year</td>
                <td>Request Book</td>
            </tr>
        </thead>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
            <td><?php echo $row["name"]; ?> </td>
            <td><?php echo $row["author"]; ?></td>
            <td><?php echo $row["genre"]; ?></td>
            <td><?php echo $row["language"]; ?></td>
            <td><?php echo $row["pages"]; ?></td>
            <td><?php echo $row["publication_year"]; ?></td>
            <td><a href = "request.php?id=<?php echo $row['id'];?>"><button class="btn btn-success"> Request </button></td>
       </tr>
       <?php } ?> 
    </table>
    
</body>
</html>



