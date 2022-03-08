<?php
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up -hotmess.com</title>
<link rel="stylesheet" href="style2.css" media="all" type="text/css">
</head>
<style>
    .right {
        position: absolute;
        right: 0px;
        width: 300px;
        border: 3px solid #73AD21;
        padding: 10px;
    }
</style>
<body>

<form action="" method="post">
<h2>Create an account</h2>
<!--<div class ="right"></div>-->
<div class="container">
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

    <label for="password"><b>confirm_password</b></label>
    <input type="password" placeholder="confirm password" id="password" name="confirm_password" required>

    <button type="submit">Sign Up</button>
</div>
<!--    </div>-->
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>';
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>';
}
?>
<div class="container" style="background-color:#f1f1f1">
<a href="user.php"><button type="button" class="Regbtn">Login</button></a>
</div>
</form>
</body></html>
