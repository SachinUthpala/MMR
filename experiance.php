<?php
session_start();
require './Admin/BackEnd/conn.php';
ini_set('display_errors', 0);


$sql = "SELECT * FROM `experiences`";
$smtp = $conn->prepare($sql);
$smtp->execute();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MMR25 -  Together | City-Wide Beach Festival | Negombo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="./img/logo/logo.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- corosal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>

<body class="">

    <!-- Spinner Start -->
    <div id="spinner" 
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex flex-column align-items-center justify-content-center bg-white">
    <div class="spinner-image-wrapper" style="position: relative; display: inline-block;">
        <img src="img/logo/logo.png" alt="Loading..." style="width: 250px; height: auto; object-fit: contain;">
        <svg class="spinner-ring" width="340" height="340" viewBox="0 0 100 100" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <circle cx="50" cy="50" r="45" fill="none" stroke="#1b457f" stroke-width="1" stroke-linecap="round"/>
        </svg>
    </div>
</div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid nav-bar bg-white">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg ">
                <a href="#home" class="navbar-brand">
                    <img src="./img/logo/logo.png" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars font-blue"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="./index.html" class="nav-item nav-link ">Home</a>
                        <a href="./index.html#timeline" class="nav-item nav-link">Time Line</a>
                        <a href="./index.html#overview" class="nav-item nav-link">Overview</a>
                        <a href="./index.html#partners" class="nav-item nav-link">Partners</a>
                        <a href="./index.html#together" class="nav-item nav-link">Together</a>
                        <a href="./index.html#merch" class="nav-item nav-link">Merch</a>
                        <a href="./index.html#ticket" class="nav-item nav-link">Tickets</a>
                        <a href="./index.html#Rally" class="nav-item nav-link">Rally</a>
                        <a href="./index.html#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
<div class="center-section wow bounceInUp" id="home"></div>



<div class="endcorosal py-5" id="Rally">
     <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-primary text-uppercase bg-transparent border border-bottom-primary rounded-pill px-4 py-1 mb-3">Experiences</small>
                <h1 class="display-5 mb-5 font-blue text-headding">Explore Partners Experiences </h1>
            </div>
   
<div class="container py-4">
  <div class="row justify-content-center">
  <?php while($row = $smtp->fetch(PDO::FETCH_ASSOC)){ ?>
    <!-- Card 1 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card2">
        <div class="box front" style="background: url('<?php echo $row['hotelImage']; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; flex-direction: column; justify-content: flex-end; align-items: center; text-align: center;">
  <h4 class="bg-blue text-white" style="width: 100%; margin: 0; padding: 10px 0; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;"><?php echo $row['hotelName']; ?></h4>
</div>
        
        <div class="box back" style="background: linear-gradient(#1e1e5085,#1e1e5081) ,url('<?php echo $row['hotelImage']; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;flex-direction: column;gap: 5px;text-align: center;">
        <p class="text-white"><?php echo $row['hotelDiscription']; ?></p>  
        <a href="./img/Rally/I3.png" data-lightbox="gallery" class="explore-btn">Explore</a>
        </div>
      </div>
    </div>

    <?php } ?>

    

    
    <!-- Repeat more cards as needed -->

  </div>
</div>

    

</div>

   



    <!-- Copyright Start -->
    <div class="container-fluid copyright  py-4 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 row gap-2">
                    <a href="#" class="btn btn-md-square btn-secondary rounded-circle "><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-md-square btn-secondary rounded-circle px-3"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <span class="text-light"><a href="#" class="text-white"><i class="fas fa-copyright text-light me-2"></i>2025 MMR 25 - Together. All rights reserved</a><br>
                        Three Days. One City. Endless Vibes.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
     <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="./js/Scroll.js"></script>
    <script src="./js/carosal.js"></script>
</body>

</html>