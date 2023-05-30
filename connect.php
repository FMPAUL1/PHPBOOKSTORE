<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="books";

$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


if ($conn->connect_error) {
die("sommething went wrong ".$conn->connect_error);

} 


?>