<?php 
include 'header.php'; 

$q1 = "SELECT * FROM `orders` WHERE `Status`='Pending'";
$row1 = mysqli_query($db,$q1);
$count1 = mysqli_num_rows($row1);

$q2 = "SELECT * FROM `users`";
$row2 = mysqli_query($db,$q2);
$count2 = mysqli_num_rows($row2);

$q3 = "SELECT * FROM `Plants`";
$row3 = mysqli_query($db,$q3);
$count3 = mysqli_num_rows($row3);

$q4 = "SELECT * FROM `orders` WHERE `Status`='Delivered'";
$row4 = mysqli_query($db,$q4);
$count4 = mysqli_num_rows($row4);


?>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">
                          Hello <?php echo $_SESSION['FullName']; ?> 🎉
                        </h5>
                        <p class="mb-4">
                          You have <span class="fw-bold"><?php echo $count1; ?></span> Pending today. Check Orders in your dashboard.
                        </p>

                        <a href="remainingorders.php" target="_self" class="btn btn-sm btn-outline-primary">View Orders</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br><br>

<div class="container">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Remaining Orders</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>User Id</th>
                        <th>Plant Id</th>
                        <th>Quantity</th>
                        <th>Order Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php

                    while ($data1 = mysqli_fetch_assoc($row1)) {



                    ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data1['Order_Id']; ?></strong></td>
                            <td><?php echo $data1['User_Id']; ?></td>
                            <td><?php echo $data1['Plant_Id']; ?></td>
                            <td><?php echo $data1['Quantity']; ?></td>
                            <td><?php echo $data1['Order_Date']; ?></td>
                            <td>$<?php echo $data1['Total_Amount']; ?></td>
                            <td><?php echo $data1['Status']; ?></td>
                            <td><a href="deleteorder.php?Order_Id=<?php echo $data1['Order_Id']; ?>">Delete</a></td>
                        </tr>
                        <tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<br><br>

    <div class="container">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Delivered Orders</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>User Id</th>
                        <th>Plant Id</th>
                        <th>Quantity</th>
                        <th>Order Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php

                    while ($data4 = mysqli_fetch_assoc($row4)) {



                    ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data4['Order_Id']; ?></strong></td>
                            <td><?php echo $data4['User_Id']; ?></td>
                            <td><?php echo $data4['Plant_Id']; ?></td>
                            <td><?php echo $data4['Quantity']; ?></td>
                            <td><?php echo $data4['Order_Date']; ?></td>
                            <td>$<?php echo $data4['Total_Amount']; ?></td>
                            <td><?php echo $data4['Status']; ?></td>
                            <td><a href="deleteorder.php?Order_Id=<?php echo $data4['Order_Id']; ?>">Delete</a></td>
                        </tr>
                        <tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

         <?php
          include 'footer.php';

         ?>