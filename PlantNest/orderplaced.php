<?php 

include 'header.php';

if(isset($_SESSION['Profile'])){


?>



    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Order Placed</h2>
        </div>

       
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
<br><br>
    <center><h1 style="font-size: 48px;">Order Placed.</h1></center>

    <center><span style="font-size: 28px;">To check your order go to <a href="profile.php" style="font-size: 28px;">Profile.</a></span></center>
<br><br><br>
   

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

<?php

}else{

    echo "<script>window.open('login.php','_self');</script>";

}

?>