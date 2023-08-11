
<?php 
session_start();
	$e = $_SESSION['e'];
	// echo "$e";
	// print_r($e);
	$con = mysqli_connect("localhost","root","","plantnest");
	// $id = $_GET['id'];
	$q = "SELECT * FROM `users` WHERE `Email` = '$e'";
	$row = mysqli_query($con,$q);
	$data = mysqli_fetch_assoc($row);



 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
 <!--    <div class="preloader d-flex align-items-center justify-content-center">
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
                                <div class="login">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
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
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="shop.html">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.html">Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-post.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="contact.html">Contact</a></li>
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

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Edit Profile</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Info</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
     <!-- ##### Breadcrumb Area End ##### -->

    <!-- #####  Update Area Start ##### -->
  

 	 <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="Update-form">
                                
                               
                                <form method="Post">
                                	<h2>Edit Profile</h2>
                                    <div class="row">
                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label">Name:</label>
                                            <input type="text" name="name" id="name" value="<?php echo $data['Username']; ?>" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label"> Full Name:</label>
                                            <input type="text" name="fname" id="name" value="<?php echo $data['FullName']; ?>" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label">Password:</label>
                                            <input type="password" name="password" id="email" value="<?php echo $data['Password']; ?>" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Password" required>
                                        </div>

                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label">Confirm Password:</label>
                                            <input type="password" name="password" id="email" value="<?php echo $data['Password']; ?>" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Confirm Password" required>
                                        </div>

                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label">Email</label>
                                            <input type="email" name="email" value="<?php echo $data['Email']; ?>"  class="form-control" placeholder="Email 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-6 mb-3 mt-3">
                                        	<label class="form-label">Confirm Email:</label>
                                            <input type="email"  value="<?php echo $data['Email']; ?>"  name="email" id="date"  class="form-control" placeholder="Confirm Email">

                                        
                                        </div>                                   
                                    </div>
                                    
                                         <div class="col-lg-6 col-md-6 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button" name="go">Update Info</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <?php 
if(isset($_POST['go'])){
	
  $n = $_POST['name'];
  $f = $_POST['fname'];
  $e = $_POST['email'];
  $p = $_POST['password'];

  $q1 = "UPDATE `users` SET `Username`='$n',`FullName`='$f',`Email` = '$e',`Password` = '$p' WHERE `Email` = '$e'";
  mysqli_query($con,$q1);
  echo"<script>window.open('profile.php','_self')</script>";




}?>



</body>
</html>