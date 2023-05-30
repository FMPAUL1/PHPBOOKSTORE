



<?php 

if(isset($_GET['id'])){

    $id= $_GET['id'];
    include('connect.php');
    $sql = "DELETE FROM books where id = $id";
    if ($result = mysqli_query($conn,$sql)){
        session_start();
        $_SESSION['delete'] ='RECORD BOOK deleted SUCCESSFULLY';
        header('Location:index.php');
    } else {
        echo "error somewhere";
    }
}
?>