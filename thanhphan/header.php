
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Education</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/5c4fab5980.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header mt-3">
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="order-md-last">
        <h4 class="text-primary text-uppercase mb-3">
          Search
        </h4>
        <div class="search-bar border rounded-2 border-dark-subtle">
          <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
            <button method = "post"class="fs-4 me-3" style="background: none; border: none;">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
    <div class="container-fluid">
      <div class="main-logo d-lg-none">
        <!-- <a href="index.php">
          <img src="images/logo.png" alt="logo" class="img-fluid">
        </a> -->
      </div>

      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header mt-3">
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body justify-content-between">
          <div class="main-logo">
            <!-- <a href="index.html">
              <img src="images/logo.png" alt="logo" class="img-fluid">
            </a> -->
          </div>

          <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link ">Trang chủ</a> 
              <!-- mx-2 active -->
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                data-bs-toggle="dropdown" aria-expanded="false">Năm học</a>
              <ul class="dropdown-menu" aria-labelledby="pages">
                <li><a href="about.html" class="dropdown-item">Năm 1</a></li>
                <li><a href="instructors.html" class="dropdown-item">Năm 2</a></li>
                <li><a href="cart.html" class="dropdown-item">Năm 3</a></li>
                <li><a href="wishlist.html" class="dropdown-item">Năm 4</a></li>
                <li><a href="checkout.html" class="dropdown-item">Năm 5</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="meetingroom.php" class="nav-link ">Meeting Room</a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="blog"
                data-bs-toggle="dropdown" aria-expanded="false">blog</a>
              <ul class="dropdown-menu" aria-labelledby="blog">
                <li><a href="blog.html" class="dropdown-item">blog<span
                      class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                <li><a href="single-post.html" class="dropdown-item">single post<span
                      class="badge bg-secondary text-white ms-2">PRO</span></a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="shop"
                data-bs-toggle="dropdown" aria-expanded="false">shop</a>
              <ul class="dropdown-menu" aria-labelledby="shop">
                <li><a href="shop.html" class="dropdown-item">Shop<span
                      class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                <li><a href="single-product.html" class="dropdown-item">Single Product<span
                      class="badge bg-secondary text-white ms-2">PRO</span></a></li>
              </ul>
            </li> -->

            <li class="nav-item">
              <a href="contact.php" class="nav-link mx-2">contact</a>
            </li>
            <!-- <li class="nav-item">
              <a href="https://templatesjungle.gumroad.com/l/jubilee-free-bootstrap-5-html-website-template-for-online-course"
                class="nav-link mx-2 text-decoration-underline" target="_blank">GET PRO</a>
            </li>
          </ul> -->

          <div class="d-none d-lg-flex align-items-center">
            <ul class="d-flex  align-items-center list-unstyled m-0">
              <li>
                <a href="account.php" class="ms-3">
                  <i class="fa-sharp-duotone fa-solid fa-user"></i> </a>
              </li>
              <li>
                <a href="wishlist.php" class="ms-3">
                  <i class="fa-regular fa-heart" ></i>  </a>
                </a>
              </li>

              <li>
                <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                  aria-controls="offcanvasSearch">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  </svg> </a>
                </a>
              </li>

            </ul>
          </div>

        </div>
      </div>

    </div>
    <div class="container-fluid d-lg-none">
      <div class="d-flex  align-items-end mt-3">
        <ul class="d-flex  align-items-center list-unstyled m-0">
          <li>
            <a href="account.php" class="me-3">
              <i class="fa-sharp-duotone fa-solid fa-user"></i></a>
          </li>
          <li>
            <a href="wishlist.php" class="me-3">
              <i class="fa-regular fa-heart" ></i> </a>
            </a>
          </li>
          <li>
            <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
              aria-controls="offcanvasSearch">
              <i class="fa-solid fa-magnifying-glass"></i></a>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>