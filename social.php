
<!DOCTYPE html>
<html lang="en


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halisitimes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <!--  <link href="assets/img/favicon.png" rel="icon">-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 
    <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

</head>

<body style=" background-color: whitesmoke">

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div style="background-color:whitesmoke " class="container d-flex justify-content-center justify-content-md-between">

      <div class="logo">
          <!--        <h1><a href="index.html"> HALISI TIMES</a></h1>-->
          <!--         Uncomment below if you prefer to use an image logo -->
          <a href="index.html"><img src="assets/img/HT%20(1).png"alt="logo"  class="img-fluid" style="border-radius:50%; border: 1px solid; width: 70px;"></a>
      </div>
    <div class="contact-info d-flex align-items-center">
    </div>
<div>

<h1 style='color:greenyellow'; >HALISITIMES</h1>
</div>

      <div class="social-links text-center mt-2 text-lg-right pt-3 pt-lg-0">
          <a style='color:greenyellow'; href="https://twitter.com/mbuvi_ke" class="twitter"><i class="bx bxl-twitter" ></i></a>
          <a style='color:greenyellow'; href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a style='color:greenyellow'; href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>

        <span style='color:greenyellow'; class="mt-2">Delivering truth you can trust</span>
    <div class="cta d-none d-md-flex align-items-center">
            <!-- <a style='color:greenyellow'; href="login.php">Admin</a> -->

    </div>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header style="background-color:white;" id="header" class="d-flex align-items-center">
  <div  style="background-color:whitesmoke "  class="container-fluid">

      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="index.php">home</a></li>
        <li><a class="nav-link scrollto " href="trending.php">trending</a></li>
        <li><a class="nav-link scrollto" href="politics.php">politics</a></li>
        <li><a class="nav-link scrollto" href="education.php">education</a></li>
        <li><a class="nav-link scrollto " href="economy.php">economy</a></li>
        <li><a class="nav-link scrollto" href="stock_markets.php">Stock markets</a></li>
        <li><a class="active" href="social.php">social</a></li>
      </ul>
<!--      <i class="bi bi-list mobile-nav-toggle"></i>-->
    </nav><!-- .navbar -->

   </div>
</header><!-- End Header -->

<main id="main">








    <div  style="background-color:whitesmoke " class="container">
        <div class="row">
            <?php
            $conn = mysqli_connect("localhost","root","","blog");

            $sql = "select * from data order  by id DESC ";
            $articles = mysqli_query($conn, $sql);
            foreach( $articles as $article) {

                $title = $article['title'];
                $content = $article['content'];

                $id= $article['id'];

                echo
                "<div class=container d-flex justify-content-center align-items-center>
        <div class='card text-black bg-blue mt-5'>
            <div class='card-body' style='width: 30rem;'>
            <h5 style= 'color:green'; class='card-title'> $title</h5>
              
                <a href='view.php' class='btn btn-light'>read more<span class='text-danger>&rarr;'/a>
            </div>
        </div>

    </div>";
            }?>




        </div>

    </div>






  
