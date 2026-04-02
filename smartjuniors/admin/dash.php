<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/newproject/admin/dash.css">
  <title>
        dashboard
    </title>
</head>
<body>
  <div class="admin-panel">

<h1>Welcome Admin</h1>

<h3>Event Management</h3>
<div class="grid">
<a href="add_event.php" class="mng">Add Event</a>
<a href="manage_events.php" class="mng">Manage Events</a>
</div>

<h3>Gallery Management</h3>
<div class="grid">
<a href="add_glr.php" class="mng">Add Gallery Image</a>
<a href="manage_glr.php" class="mng">Manage Gallery</a>
</div>

<h3>Notice Board</h3>
<div class="grid">
<a href="add_notice.php" class="mng">Add Notice</a>
<a href="manage_notice.php" class="mng">Manage Notice</a>
</div>

<br>
<div class="grid">
<a href="out.php" class="logout">Logout</a>
</div>

</div>



</body>
</html>
