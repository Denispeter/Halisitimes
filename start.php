<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: index.php");
    die();
}
include "logic.php";
$conn = mysqli_connect("localhost","root","","blog");


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--   link-->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
  <div class="text-center">
      <a href="article.php" class="btn btn-outline-dark">create a new post</a>
   </div>
</div>
<!---->
<!--<div class="container">-->
<!--<div class="row">-->
<!--    --><?php
//
//    $sql = "select * from data";
//   $articles = mysqli_query($conn, $sql);
//    foreach( $articles as $article){
//       $title = $article['title'];
//        $content = $article['content'];
//        echo
//        "<div class=col-8 d-flex justify-content-center align-items-center>
//        <div class='card text-white bg-dark mt-5'>
//            <div class='card-body' style='width: 18rem;'>
//            <h5 class='card-title'> $title</h5>
//               <p class='card-text'> $content></p>
//                <a href=''class='btn btn-light'>read more<span class='text-danger>&rarr;'/a>
//            </div>
//        </div>
//
//    </div>";
//    }?>
<!---->
<!---->
<!---->
<!---->
<!--  </div>-->
<!---->
<!--</div>-->
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>