<?php
// session_start();
// $e = $_SESSION['e'];
// echo "$e";
// print_r($e);
// $con = mysqli_connect("localhost","root","","plantnest");
// $id = $_GET['id'];

include 'header.php';

$e = $_SESSION['Email'];

$q1 = "SELECT * FROM `users` WHERE `Email` = '$e'";
$row = mysqli_query($db, $q1);
$data = mysqli_fetch_assoc($row);





?>





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


                    <h2>Edit Profile</h2>
                    <form method="POST">
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
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="<?php echo $data['Email']; ?>" class="form-control" placeholder="Email 123-456-7890" disabled>
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">User Id:</label>
                                <input type="text" value="<?php echo $data['User_Id']; ?>" name="id" id="date" class="form-control" placeholder="User Id" disabled>
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">Current Password:</label>
                                <input type="password" name="c-password" id="email" value="<?php echo $data['Password']; ?>" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Current Password" required>
                            </div>

                            <div class="col-lg-6 col-6 mb-3 mt-3">
                                <label class="form-label">New Password:</label>
                                <input type="password" name="n-password" id="email" value="" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="New Password" required>
                            </div>

                        </div>
                        <br>
                        <div class="col-lg-6 col-md-6 col-6 mx-auto">
                            <button type="submit" name="submit" class="btn btn-info form-control" id="submit-button" style="background-color: #70C745; border-color: #5fa93a;" name="go">Update Info</button>
                            <!-- <button type="submit" class="form-control"  name="go">Update Info</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<?php
if (isset($_POST['go'])) {



    $n = $_POST['name'];
    $f = $_POST['fname'];
    // $e = $_POST['email'];
    $cp = $_POST['c-password'];
    $np = $_POST['n-password'];
    $op = $_SESSION['pwd'];
    
    if ($cp == $op){
        
        $q2 = "UPDATE `users` SET `Username`='$n',`FullName`='$f',`Password` = '$np' WHERE `Email` = '$e'";
        exit();
        print_r($q2);
        mysqli_query($db, $q2);
        echo "<script>window.open('profile.php','_self')</script>";
    } else {

        echo "<div class='alert alert-warning'><b>Error!</b>Wrong Password.</div>";
    }
}

include 'footer.php';

?>