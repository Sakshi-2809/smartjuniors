<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "kid_school";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Database connect-ion failed");
}

?>
