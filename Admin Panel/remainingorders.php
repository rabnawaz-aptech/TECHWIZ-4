<?php

include 'header.php';

$q1 = "SELECT * FROM `orders` WHERE `Status`='Pending'";
$row = mysqli_query($db, $q1);


?>

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

                    while ($data = mysqli_fetch_assoc($row)) {



                    ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data['Order_Id']; ?></strong></td>
                            <td><?php echo $data['User_Id']; ?></td>
                            <td><?php echo $data['Plant_Id']; ?></td>
                            <td><?php echo $data['Quantity']; ?></td>
                            <td><?php echo $data['Order_Date']; ?></td>
                            <td>$<?php echo $data['Total_Amount']; ?></td>
                            <td><?php echo $data['Status']; ?></td>
                            <td><a href="deleteorder.php?Order_Id=<?php echo $data['Order_Id']; ?>">Delete</a></td>
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