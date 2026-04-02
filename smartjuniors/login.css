<?php
include("../includes/db.php");

$id = $_GET['id'];

$query = "SELECT image FROM gallery WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

$image = $row['image'];

unlink("../uploads/".$image);


$delete = "DELETE FROM gallery WHERE id='$id'";
mysqli_query($conn,$delete);

header("Location: manage_glr.php");
?>
