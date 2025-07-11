<!DOCTYPE html>
<html lang="en">


 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="assets/images/favicon/5.png" type="image/x-icon">
    <title>Second Sight Foundation</title>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
  rel="stylesheet"
/>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
   <!-- ✅ Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- ✅ Font Awesome for Stars & Arrows -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />
    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!-- Plugin CSS file with desired skin css -->
    <link rel="stylesheet" href="assets/css/vendors/ion.rangeSlider.min.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="/assets/css/header.css">
<link rel="stylesheet" href="assets/css/custom.css">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/main.css">

</head>
<style>
  /* === Desktop Specific Styles === */
@media (min-width: 992px) {
  /* Logo size */
  .navbar-brand img {
    height: 75px !important;
  }

  /* Navbar link font size */
  .navbar-nav .nav-link {
    font-size: 18px !important;
  }

  /* Cart and other icon sizes */
  .navbar .fa-shopping-cart,
  .navbar .fa-user,
  .navbar .fa-heart,
  .navbar .fa-phone {
    font-size: 22px !important;
  }

  /* Login and Signup button font size */
  .navbar .btn {
    font-size: 16px !important;
    padding: 8px 20px !important;
  }
}
@media (max-width:768px) {
  .login{
    color: white;
    background: black;
  }
  .signup{
    color: white;
    background: black;
  }
}

</style>
 <body>
    
<!-- ✅ Top Black Header -->
<div class="top-header" style="background-color: black !important;">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">
    <div class="rotating-text" style="color: white;"></div>
    <div class="right-icons d-flex align-items-center">
      <a href="track.php" style="text-decoration: none;">
        <i class="fa-solid fa-truck-fast me-1" style="color: slategray;"></i>
        <span class="me-3 text-secondary">Track Orders</span>
      </a>
      <div class="dropdown">
        <button class="btn text-secondary btn-sm bg-transparent d-lg-block d-none border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://flagcdn.com/in.svg" alt="INR" width="20" class="mx-1"> INR
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">INR</a></li>
          <li><a class="dropdown-item" href="#">USD</a></li>
          <li><a class="dropdown-item" href="#">EUR</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: white; box-shadow: 0 2px 15px rgba(0,0,0,0.1); padding: 15px 0;">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="index.php" class="navbar-brand">
      <img src="assets/images/header2.png" alt="Logo" style="height: 60px;">
    </a>
    <div class="d-lg-none d-flex align-items-center">
      <a href="#" onclick="openCartPopup(); return false;" class="me-2">
        <i class="fa fa-shopping-cart fs-5 text-dark"></i>
      </a>
      <button class="navbar-toggler border-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <a href="index.php" class="navbar-brand d-flex d-lg-none" style="margin-left:-20px;">
      <img src="assets/images/header2.png" alt="Logo" style="height: 60px;">
    </a>
      <ul class="navbar-nav gap-4 mx-auto">
        <li class="nav-item"><a class="nav-link fw-semibold text-secondary" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold text-secondary" href="product-circle.php">Products</a></li>
     
        <li class="nav-item"><a class="nav-link fw-semibold text-secondary" href="about-us.php">About</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold text-secondary" href="contact-us.php">Contact</a></li>
      </ul>
<div class="d-none d-lg-flex align-items-center">
      <a href="#" onclick="openCartPopup(); return false;" class="position-relative me-3">
        <i class="fa fa-shopping-cart fs-4 text-dark"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">0</span>
      </a>
     <!-- 🔸 Custom Gradient Button Style -->
<style>
  .btn-gradient {
    background: linear-gradient(135deg, #fdc134, #fcb813);
    color: #000 !important;
    border: none;
    padding: 14px 36px;
    font-size: 18px;
    border-radius: 8px;
    transition: 0.3s ease;
  }

  .btn-gradient:hover {
    opacity: 0.9;
  }

  .btn-gradient-outline {
    background: transparent;
    border: 2px solid #fdc134;
    color: #fdc134;
    padding: 14px 36px;
    font-size: 18px;
    border-radius: 8px;
    transition: 0.3s ease;
  }

  .btn-gradient-outline:hover {
    background: #fdc134;
    color: #000;
  }
</style>

<!-- 🔸 Buttons -->
<button onclick="openLoginPopup()" class="btn btn-gradient-outline me-3 fw-bold">LogIn</button>
<button onclick="location.href='shop-left-sidebar.php';" class="btn btn-gradient fw-bold">SignUp</button>

    </div>
      <div class="d-lg-none text-center mt-3 d-flex">
        <button onclick="openLoginPopup()" class="login btn btn-outline-warning mb-2 px-4 ">LogIn</button><br>
         <button onclick="openLoginPopup()" class="login btn btn-outline-warning mb-2 px-4 ">Signup</button><br>
      </div>
    </div>

  </div>
</nav>

