<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

/* DELETE NOTICE */
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);

    $query = "DELETE FROM notices WHERE id='$id'";
    mysqli_query($conn,$query);

    header("Location: manage_notice.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Notices</title>
<link rel="stylesheet" href="manage_events.css">
</head>

<body>
<div class="container">
<h2>Manage Notices</h2>

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php

$query = "SELECT * FROM notices ORDER BY n_date DESC";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['n_date']."</td>";

echo "<td>
<a class='delete-btn' onclick=\"return confirm('Delete this notice?')\" 
href='manage_notice.php?delete=".$row['id']."'>Delete</a>
</td>";

echo "</tr>";

}

?>

</table>
</div>
</body>
</html>
