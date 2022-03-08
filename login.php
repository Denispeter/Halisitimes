<?php
session_start();
$db_connection = mysqli_connect("localhost", "root", "", "blog");

//include "db_connection.php"
include_once("db_connection.php");



if(isset($_POST["submit"])) {


    $username = $_POST["username"];

    $password = $_POST["password"];

    $sql = "select * from users where username = '$username' and password = '$password' ";

    $result = mysqli_query($db_connection, $sql);

    $num = mysqli_fetch_assoc($result);

    if ($num > 0) {
        $_SESSION['username']= $username;

        header('location: start.php');
    } else {
        header('location: login.php?error');

    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php


if(isset($_GET['error'])){
    $error  = $_GET['error'];
    $error  = "<p style='color: red'>wrong username and password</p>";
    echo "$error";




}






?>
<div class="container">

    <div class="text-center">
        <form action="login.php" method="post">


       <input placeholder="username" name="username" type="text">
        <br><br>

        <input placeholder="password" name="password" type="password">
        <br><br>

        <input class="btn btn-primary " name="submit"   type="submit">


        </form>
    </div>

</div>


</body>
</html>