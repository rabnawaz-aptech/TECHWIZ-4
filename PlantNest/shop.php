<?php

// $db = mysqli_connect('localhost','root','','plantnest');

include 'header.php';


if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $q1 = "SELECT * FROM `plants` WHERE `Name` LIKE '%$s%'";
    $row = mysqli_query($db, $q1);
    $count1 = mysqli_num_rows($row);
} else {
    $q1 = "SELECT * FROM `plants`";
    $row = mysqli_query($db, $q1);
    $count1 = mysqli_num_rows($row);
}
?>






<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
        <h2>Shop</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Shop Area Start ##### -->
<section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            <!-- Shop Sorting Data -->
            <div class="col-12">
                <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Shop Page Count -->
                    <div class="shop-page-count">
                        <p>Showing <?php echo $count1; ?> Products</p>
                    </div>
                    <!-- Search by Terms -->
                    <div class="search-form">
                        <form method="POST">
                            <label for="">Search:</label>
                            <input type="text" name="search" id="search" placeholder="Search products">
                            <button type="submit" name="submit" class="btn btn-info" style="background-color: #70C745; border-color: #5fa93a;">Search</button>
                        </form>
                        <!-- Close Icon -->
                        <!-- <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div> -->
                    </div>
                </div>
            </div>
        </div>



        <!-- All Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
            <div class="shop-products-area">
                <div class="row">

                    <?php
                    while ($data = mysqli_fetch_assoc($row)) {



                    ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">

                                <div class="product-img">
                                    <a href="shop-details.php?id=<?php echo $data['Plant_Id']; ?>"><img src="<?php echo $data['Image_Url']; ?>" alt=""></a>
                                    <!-- Product Tag -->
                                    <!-- <div class="product-tag">
                                        <a href="#">Hot</a>
                                    </div> -->
                                    <div class="product-meta d-flex">
                                        <!-- <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a> -->
                                        <!-- <a href="cart.php" class="add-to-cart-btn">Add to cart</a> -->
                                        <!-- <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a> -->
                                    </div>
                                </div>

                                <div class="product-info mt-15 text-center">
                                    <a href="shop-details.php?id=<?php echo $data['Plant_Id']; ?>">
                                        <h4><?php echo $data['Name']; ?></h4>
                                    </a>
                                    <h6 style="color: #70C745;">$<?php echo $data['Price']; ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ##### Shop Area End ##### -->

<?php

include 'footer.php';

?>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>

</html>