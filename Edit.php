<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="d-flex justify-content=between my-4">
                <h1>ADD BOOK</h1>
                <div>
                    <a href="#">Back</a>
                </div>
            </header>
            
            <form method="post" action="">
             <div class="form-element my-4" >
                <input type="text" class="form-control" name="title" value="" placeholder="enter title"/>
             
            </div>
             <div class="form-element my-4" >
                <input type="text" class="form-control" name="author" value="" placeholder="enter author">
             
            </div><br>
             <div class="form-element my-4" >
               <select name="type" class="form-control">
                <option value=""> select a book</option>
                <option value="story"> story</option>
                <option value="literature">Literature</option>
                <option value="politics">Politics</option>
               </select>
             
            </div>
             <div class="form-element my-4" >
                <input type="text" class="form-control" name="desc" value="" placeholder="enter desc"/>
             
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Addbook"/>
            </div>
            </form>
        </div>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">

       <header class="d-flex justify-content-between my-4">
<h1> 
  EDIT BOOK  

</h1>
<div>
    <a href="index.php" class="btn btn-primary"> BACK</a>
</div>
       </header>
       <?php 
       if (isset($_GET["id"])) {
     $id= $_GET["id"];
     include("connect.php");
     $sqlcode= "SELECT * FROM books WHERE id=$id";
   $result=  mysqli_query($conn,$sqlcode);
   $rows =mysqli_fetch_array($result);
   ?>
 <form  action="process.php" class="form" method="post">
    <div class="form-element my-4">
    <input type="text" class="form-control" name="title" value="<?php echo $rows['title']; ?>" placeholder="enter book"/>
    </div>
            <div class="form-element my-4" >
            <input type="text" class="form-control" name="author" value="<?php echo $rows['author']; ?>" placeholder="AUTHOR name">
            </div>
            
            <select class="form-control" name="type">
                <option value="">select favorite book</option>
                <option value="love" <?php if($rows['type']=="love"){echo "selected";} ?> >Love </option>
                <option value="politics"  <?php if($rows['type']=="politics"){echo "selected";} ?> >Politics</option>
                <option value="programming" <?php if($rows['type']=='programming'){echo "selected";} ?>  >Programming</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
           <div class="form-element my-4" >
           <input type="text"class="form-control" name="description" value="<?php echo $rows['description']; ?>" placeholder="put some description"/>
           </div>
           
            <input type="submit" name="edit" class="btn btn-success"   value="UPDATE">
        </form>
        </div>
   <?php 
       }
       ?>

      
       
    </body>
</html>