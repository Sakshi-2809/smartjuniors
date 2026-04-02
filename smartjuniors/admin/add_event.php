<?php
include("../includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="add_event.css"><title>Document</title>
</head>
<body>
    <div class="event-box">
    <h2>Add Event</h2>

<form method="POST" action="save_event.php">

Title:<br>
<input type="text" name="title"><br><br>

Date:<br>
<input type="date" name="date"><br><br>

Time:<br>
<input type="text" name="time"><br><br>

Location:<br>
<input type="text" name="location"><br><br>

<button type="submit" name="submit">Add Event</button>

</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{

$title=$_POST['title'];
$date=$_POST['date'];
$time=$_POST['time'];
$location=$_POST['location'];

$query="INSERT INTO events(title,e_date,e_time,location)
VALUES('$title','$date','$time','$location')";

if(mysqli_query($conn,$query)){
    echo "Event Added Successfully";
}else{
    echo mysqli_error($conn);
}

}

?>
    
</div>