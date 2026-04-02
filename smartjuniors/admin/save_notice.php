<?php
include("../includes/db.php");

if(isset($_POST['submit'])){

$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['n_date'];

if($title=="" || $content=="" || $date==""){
    echo "All fields are required!";
}else{

$query = "INSERT INTO notices(title, content, n_date)
VALUES('$title', '$content', '$date')";

mysqli_query($conn,$query);

header("Location: add_notice.php?success=1");

}

}
?>
