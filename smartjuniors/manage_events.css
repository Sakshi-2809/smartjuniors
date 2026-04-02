<?php
include("../includes/db.php");
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $_SESSION['admin']=$username;
        header("Location: dash.php");
    }else{
        $error = "Invalid username or password!";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-box">

    <a href="index.php" id="branding">
		<img src="../dummy/logo.png" alt="">
	</a> 
    <h2>Admin Login</h2>

    <form method="POST">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>

        <button type="submit" name="login">Login</button>

    </form>

</div>


</body>

</html>
