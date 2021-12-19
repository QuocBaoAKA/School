<?php
    // session_start();
	  if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap'] = 0;
	  else $_SESSION['luottruycap']+=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Trường MN & TH Tân Minh Trí</title>
    <!--link bootstrap--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--link icon---->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--link icon fontawesome---->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="cssuser/style.css">
    <style>
      
      
    </style>
</head>
<body onload="initClock()">
    <!---header---->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#" style="color: #96191D; font-weight: 600;">
        Trường Mầm non - Tiểu học Tân Minh Trí
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active" style="background-color: #0066ff; color: #fff; border-radius: 8px;">
          <a class="nav-link" href="dangnhap.php" style="color: #fff; font-size: 16px;">Đăng Nhập</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <div class="banner-top">
    <img src="http://sgdtravinh.edu.vn/documents/12126790/12126869/12126790_12126869_152006_10092019.png" alt="Hình banner">
</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="hinhanh/bn1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hinhanh/n2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hinhanh/bn3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---modal login---->

<!-- <div id="demo-modal" class="modal">
    <div class="modal__content">
    <div class="wrapper">
    <header>Đăng Nhập</header>
    <form action="./dangnhap.php" method="post" name="frmDangNhap">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Tên đăng nhập..." name="email">
          <i class='icon bx bx-user'></i>

          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Tên đăng nhập không được để trống</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Mật khẩu..." name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Mật khẩu không được để trống</div>
      </div>
      <div class="pass-txt"><a href="#">Quên mật khẩu?</a></div>
      <input type="submit" name="sbmDN" value="Đăng Nhập">
    </form>
   <div class="sign-txt">? <a href="#">Signup now</a></div> -->
    
  <!-- </div>
    <a href="#" class="modal__close">&times;</a>
    </div> -->
   
</div>
<!---end------>
<!--menu---->
<nav class="navbar navbar-expand-md navbar-light bg-light cls-1" style="background-color: #96191D !important;" >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #fff;">Trang Chủ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Giới Thiệu
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="gioithieu.php">Lịch Sử</a></li>
            <li><a class="dropdown-item" href="#">Cơ Cấu Tổ Chức</a></li>
            <li><a class="dropdown-item" href="#">Thành Tích</a></li>
            <li><a class="dropdown-item" href="#">Nhân Sự</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tin Tức, Sự Kiện
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="bepanhocduong.php">Bếp Ăn Học Đường</a></li>
            <li><a class="dropdown-item" href="tintuc.php">Tin Tức</a></li>
            <li><a class="dropdown-item" href="#">Văn Bản</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Học Sinh</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tuyển Sinh
          </a>
          <ul class="dropdown-menu fade-up" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Tuyển Sinh Mầm Non</a></li>
            <li><a class="dropdown-item" href="#">Tuyển Sinh Tiểu Học</a></li>
            <li><a class="dropdown-item" href="tuyensinhtructuyen.php">Tuyển Sinh Trực Tuyến</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lienhe.php">Liên Hệ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!---menu-botom---->
<div class="hd_top">
<div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <div class="marque">
      <marquee width="100%" scrollamount="5">
        <p>Chào mừng bạn đến với website Trường MN & TH Tân Minh Trí</p>
      </marquee>
    </div>
</div>

<!---content-->
<div class="row1">
  <div class="leftcolumn">

  
    
<!---end--->
</body>
</html>