<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PlantNest - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        .login1 {
            display: block;
        }

        .login2 {
            display: none;
        }
    </style>

</head>
<?php

include 'db.php';

// $_SESSION['Profile'] = $_COOKIE['email'];
// echo $_COOKIE['email']; 
if (isset($_SESSION['Profile'])) {


    $_SESSION['Email'] = $_COOKIE['email'];
    $p = $_SESSION['Email'];

    $q = "SELECT * FROM `users` WHERE `Email`='$p'";
    $row = mysqli_query($db, $q);
    $data = mysqli_fetch_assoc($row);

    $_SESSION['Id'] = $data['User_Id'];
    $_SESSION['Username'] = $data['Username'];
    $_SESSION['FullName'] = $data['FullName'];
    $_SESSION['Email'] = $data['Email'];
    $_SESSION['Role'] = $data['Role'];

    echo "<style>.login1{display: none !important;} .login2{display: block !important;}</style>";
}
?>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">UK</a>
                                            <a class="dropdown-item" href="#">Bangla</a>
                                            <a class="dropdown-item" href="#">Hindi</a>
                                            <a class="dropdown-item" href="#">Spanish</a>
                                            <a class="dropdown-item" href="#">Latin</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Login -->
                                <div class="login login1">
                                    <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                                <!-- Profile -->
                                <div class="login login2">
                                    <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> <span><?php echo $_SESSION['Email']; ?></span></a>
                                </div>
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">
                        <!-- Nav Brand -->
                        <a href="index.php"><img src="img/core-img/logo4-removebg-preview.png" alt="" height="175px" width="175px" style="color: white;"></a>
                        <!-- <a href="index.php" class="nav-brand"><h3 style="color: #70C745;">Aleeza</h3></a> -->

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="shop.php">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Shop</a></li>
                                                    <li><a href="shop-details.php">Shop Details</a></li>
                                                    <li><a href="cart.php">Shopping Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.php">Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.php">Portfolio</a></li>
                                                    <li><a href="single-portfolio.php">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-post.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->