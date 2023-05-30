<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    .book-details{
        background-color: salmon;
        padding: 50px;
        color:black;
    }
    </style>
    </head>
    <body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
        <h1>BOOK DESCRIPTION </h1>  
        <div >
            <a href="index.php" class="btn btn-primary " > Home Page</a>
        </div>
         
        </header>
<div class="book-details my-4">
    <?php 
if (isset($_GET["id"])) {
    $id=$_GET['id'];
    include('connect.php');

     $sql = "SELECT * FROM books WHERE  id =$id";
     $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>

 <h2> Title</h2>
 <p><?php echo $row['title']; ?></p>
 <h2> DESCRIPTION</h2>
 <p><?php echo $row['description']; ?></p>
 <h2> Type</h2>
<p><?php echo $row['type']; ?></p>
<h2> Author </h2>
<p><?php echo $row['author']; ?></p>

<?php


    
}
?>
</div>
    
    </div>
    </body>
</html>