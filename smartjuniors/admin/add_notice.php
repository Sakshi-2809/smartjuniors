<?php
include("../includes/db.php");
?>
<link rel="stylesheet" href="add_notice.css">
<div class="notice-box">
<h2>Add Notice</h2>

<form method="POST" action="save_notice.php">


Title<br>
<input type="text" name="title"><br><br>

Content<br>
<textarea name="content"></textarea><br><br>

Date<br>
<input type="date" name="n_date"><br><br>

<button name="submit">Save Notice</button>

</form>

<?php
if(isset($_POST['submit'])){

$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['n_date'];

if($title=="" || $content=="" || $date==""){
    echo "All fields are required!";
}else{

$query="INSERT INTO notices(title,content,n_date)
VALUES('$title','$content','$date')";

mysqli_query($conn,$query);

echo "Notice Added Successfully";

}
}

?>
</div>