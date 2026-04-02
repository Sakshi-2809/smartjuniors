<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

/* DELETE EVENT */
if(isset($_GET['delete'])){
$id = $_GET['delete'];

$query="DELETE FROM events WHERE id='$id'";
mysqli_query($conn,$query);

header("Location: manage_events.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Events</title>
<link rel="stylesheet" href="manage_events.css">

</head>

<body>
<div class="container">
<h2>Manage Events</h2>
<div class="top-bar">
        <a href="../event.php" class="event-btn">Go to Event</a>
    </div>
<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Date</th>
<th>Time</th>
<th>Location</th>
<th>Action</th>
</tr>

<?php

$query="SELECT * FROM events ORDER BY e_date DESC";
$result=mysqli_query($conn,$query);

$today=date("Y-m-d");

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['e_date']."</td>";
echo "<td>".$row['e_time']."</td>";
echo "<td>".$row['location']."</td>";

if($row['e_date'] < $today){

    echo "<td>
    <a class='delete-btn' href='manage_events.php?delete=".$row['id']."'>Delete</a>
    </td>";

}else{

    echo "<td>Upcoming
    <a class='delete-btn' href='manage_events.php?delete=".$row['id']."'>Delete</a>
    </td>";

}



echo "</tr>";

}

?>

</table>
</div>
</body>
</html>
