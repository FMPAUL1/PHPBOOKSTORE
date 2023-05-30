<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>booklist</title>
    </head>
    <body>
    <div class="container">
    <h1 class="my-4 ">A SIMPLE CRUD OPERATION TO SHOW CRUD OPERATION</h1>
    <header class=" d-flex justify-content-between my-4">
       
        <h1>BOOK LIST</h1>  
        <div class="">
            <a href="create.php" class="btn btn-info " > ADD BOOK</a>
        </div>
        
    </header > 
    <?php 
    session_start();
    if (isset($_SESSION['create'])){
        ?>  
<div class=" alert alert-success">
    <?php 
    echo $_SESSION['create'];
    unset($_SESSION['create']);

    ?>
</div>
        <?php 

      
    }
    
    ?>
    <?php 
  
    if (isset($_SESSION['update'])){
        ?>  
<div class=" alert alert-success">
    <?php 
    echo $_SESSION['update'];
    unset($_SESSION['update']);

    ?>
</div>
        <?php 

      
    }
    
    ?>
    <?php 
   
    if (isset($_SESSION['delete'])){
        ?>  
<div class=" alert alert-success">
    <?php 
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);

    ?>
</div>
        <?php 

      
    }
    
    ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
    
            <th>TYPE   </th>
            <th>DESCRIPTION  </th>
        </tr>
        <tbody>
 <?php 
include("connect.php");
$sql = "SELECT * FROM books";
$result= mysqli_query($conn,$sql);

while (  $row= mysqli_fetch_array($result) ){
    ?>
<tr>
    <td> <?php echo $row['id'] ?> </td>
    <td> <?php echo $row['title'] ?> </td>
    <td> <?php echo $row['author'] ?> </td>
    <td> <?php echo $row['type'] ?> </td>
    <td> <?php echo $row['description'] ?> </td>
    <td> <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info"> READMORE</a> </td>
    <td> <a href="edit.php?id=<?php echo $row["id"]; ?>"  class="btn btn-warning"> EDIT</a> </td>
    <td> <a href="delete.php?id=<?php echo $row["id"]; ?>"  class="btn btn-danger"> DELETE</a> </td>
</tr>
<?php
}
?>


        </tbody>
        </thead>
    </table>
    </div>
    </body>
</html>