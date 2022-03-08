
<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: index.php');
exit;
}
?>
<?php
//session_start();
//require 'db_connection.php';
//// CHECK USER IF LOGGED IN
//if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
//
//    $user_email = $_SESSION['user_email'];
//    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
//    $userData =  mysqli_fetch_assoc($get_user_data);
//
//}else{
//    header('Location: logout.php');
//    exit;
//}
//?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - halisitimes.com</title>
<link rel="stylesheet" href="style2.css" media="all" type="text/css">
</head>

<body>

<form action="" method="post">
    <h2>welcome to halisitimes</h2>
<h2>User Login</h2>

<div class="container">
<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>';
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>';
}
?>
<div class="container" style="background-color:lightgreen">
<a href="signup.php"><button type="button" class="Regbtn">Create an account</button></a>
</div>
</form>
</body></html>