<?php 

include 'header.php';

if(isset($_SESSION['Profile'])){

 $q1="SELECT * FROM `orders`";
$row=mysqli_query($db,$q1);





 ?>
<link rel="stylesheet" href="css/profile.css">

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Profile</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body>
<?php 


// if(isset($_SESSION['email'])){


//     $email = $_SESSION['email'];
//     $q1 = "SELECT * FROM `users` WHERE `Email` = '$email'";
//     $run = mysqli_query($con,$q1);
//     $data1 = mysqli_fetch_assoc($run);
   // $_SESSION['ID']  = $data1['User_Id'];

    // $_SESSION['Username'] = $data1['Username'];
    // $_SESSION['FullName'] = $data1['FullName'];
    // $_SESSION['Email'] = $data1['email'];
   
    // $q1 = "SELECT * FROM `users` WHERE `User_id` = '$id'";
    // $run1 = mysqli_query($con,$q1);
    // $data1 = mysqli_fetch_assoc($run1);


// }
// $ID = $_SESSION['ID'];  
 ?>


 <!-- ##### Profile Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="col-lg-12  col-12">
                         <h2 class="order">User Information</h2>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex">
                               Name:
                               <span><?php echo $_SESSION['Username']; ?></span>
                            </li>

                            <li class="list-group-item d-flex">
                               Full Name:
                                <span><?php echo $_SESSION['FullName']; ?></span>
                            </li>

                            <li class="list-group-item d-flex">
                                 Email
                                <span><?php echo $_SESSION['Email']; ?></span>
                            </li>
                        
                        </ul>
                        <a href="logout.php">logout</a>
                        <button class="btn btn-info"><a href="setting.php">Setting</a></button>
                    </div>
                </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="alazea-benefits-area">
            <h2 class="order">ORDER TABLE</h2>        
       <table class="table table-striped">
    <thead>
      <tr>
        <th class="order1">user Id</th>
        <th class="order1">Plant Id</th>
        <th class="order1">Quantity</th>
        <th class="order1">Order Date</th>
        <th class="order1">Total Amount</th>
        <th class="order1">Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php while ($data=mysqli_fetch_assoc($row)) {
   
 ?>

      <tr>
        <td><?php echo $data['User_Id']; ?></td>
        <td><?php echo $data['Plant_Id']; ?></td>
        <td><?php echo $data['Quantity']; ?></td>
        <td><?php echo $data['Order_Date']; ?></td>
        <td><?php echo $data['Total_Amount']; ?></td>
        <td><a href="delete.php?id=<?php echo $data['User_Id']; ?>"> <button class="btn-danger">Delete</a></td></button>
      
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>


</div>
    </div>
</div>
</div>  
    </section>


<?php

include 'footer.php';

        }else{
            echo "<script>window.open('login.php','_self');</script>";
        }

?>