<?php require('connection.php');
require('staff_layout.php'); 
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM books WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
}
if (isset($_POST["name"])  &&  isset($_POST["genre"]) && isset($_POST["language"]) && isset($_POST["pages"]) && isset($_POST["publication_year"]) && isset($_POST["author"]) ){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $genre = $_POST["genre"];
    $language = $_POST["language"];
    $pages = $_POST["pages"];
    $publication_year = $_POST["publication_year"];
    $author = $_POST["author"];
    $query = "UPDATE books SET name ='$name' , genre = '$genre' , language = '$language', pages = '$pages', publication_year = '$publication_year' , author = '$author'WHERE id ='$id';";
    
    if ($connection->query($query) == TRUE) {
        header('Location: fetch_books.php');
    } else {
        echo $connection->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>
    <form method="post" action="edit.php">
        <input type="text" name="id" value = "<?php echo $id;?>" hidden>
        <input type = "text" name = "name" placeholder="Name of Book" required value="<?php echo $row['name']?>"> <br>
        <input type = "text" name = "author" placeholder="Author" required  value="<?php echo $row['author']?>" > <br>
        <input type = "text" name = "genre" placeholder="Genre of Book" required value="<?php echo $row['genre']?>"> <br>
        <input type = "text" name = "language" placeholder="Language" required  value="<?php echo $row['language']?>"> <br>
        <input type = "number" name = "pages" placeholder="Name of Pages" required  value="<?php echo $row['pages']?>"> <br>
        <label for="publication_year">Publication Year</label>
        <input type = "date" name = "publication_year" placeholder="Publication Year" required  value="<?php echo $row['publication_year']?>"> <br>

        <input type="submit" value="Save">
    </form> 
    
</body>
</html>