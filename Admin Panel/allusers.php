<?php

include 'header.php';



$q = "SELECT * FROM `users`";
$row = mysqli_query($db, $q);

?>



<br><br>

<div class="container">
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">All Products</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>FullName</th>
            <th>Email</th>
            <th></th>

          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php

          while ($data = mysqli_fetch_assoc($row)) {



          ?>
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data['User_Id']; ?></strong></td>
              <td><?php echo $data['Username']; ?></td>
              <td><?php echo $data['FullName']; ?></td>
              <td>
                <?php echo $data['Email']; ?>
              </td>

              <!-- <td>
                    
                      </td> -->
              <!-- <td>
                        <img src="" alt="" width="50px" height="50px">
                      </td> -->
              <td>
                <a href="deleteuser.php?User_Id=<?php echo $data['User_Id']; ?>">Delete</a>
              </td>
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