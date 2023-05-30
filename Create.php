

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
        <header class="d-flex justify-content-between my-4 ">
<h1> 
  ADD A BOOK  PAGE

</h1>
<div>
    <a href="index.php" class="btn btn-primary"> BACK</a>
</div>
       </header>
            <form  action="process.php" method="post">
       <div class="form-element my-4">
        
           <input type="text" class="form-control" name="title" value="" placeholder="ENTER TITLE OF BOOK"/>
       </div>
       <div class="form-element my-4">
        
           <input type="text" class="form-control" name="author" value="" placeholder="AUTHOR NAME">
       </div>
       <select class="form-select" name="type">
           <option value="">SELECT FAVOURITE BOOK</option>
           <option value="love">Love </option>
           <option value="politics">Politics</option>
           <option value="programming">Programming</option>
       </select>
       <div class="form-element my-4">
        
           <input type="text" class="form-control" name="description" value="" placeholder="ENTER  BOOK DESCRIPTION"/>
       </div>
       <div class="form-element my-4">
        
           <input type="submit" class="btn btn-success" name="create" value="submit">
       </div>
        </form>
        </div>
    </body>
</html>