<?php require('connection.php');
require('staff_layout.php'); 
if (isset($_POST["name"])  &&  isset($_POST["genre"]) && isset($_POST["language"]) && isset($_POST["pages"]) && isset($_POST["publication_year"]) && isset($_POST["author"]) ){
    $name = $_POST["name"];
    $genre = $_POST["genre"];
    $language = $_POST["language"];
    $pages = $_POST["pages"];
    $publication_year = $_POST["publication_year"];
    $author = $_POST["author"];
    $query = "Insert into books values('','$name','$genre','$language', '$pages','$publication_year','$author');";
    mysqli_query($connection,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Books</title>
</head>
<body>
    <h1>Add books</h1>
    <form method="post" action="add_book.php">
        <input type = "text" name = "name" placeholder="Name of Book" required> <br>
        <input type = "text" name = "author" placeholder="Author" required> <br>
        <input type = "text" name = "genre" placeholder="Genre of Book" required> <br>
        <input type = "text" name = "language" placeholder="Language" required> <br>
        <input type = "number" name = "pages" placeholder="Name of Pages" required> <br>
        <label for="publication_year">Publication Year</label>
        <input type = "date" name = "publication_year" placeholder="Publication Year" required> <br>

        <input type="submit" value="Add Book">
    </form> 
    
</body>
</html>