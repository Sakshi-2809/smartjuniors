<?php

include("../includes/db.php");

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];

$query = "INSERT INTO events(title,e_date,e_time,location)
VALUES('$title','$date','$time','$location')";

mysqli_query($conn,$query);

header("Location: ../event.php");


?>
