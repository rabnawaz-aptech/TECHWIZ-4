<?php

include 'header.php';


$q="SELECT * FROM `contact`";
$row=mysqli_query($db,$q);


?>


<br><br>

<div class="container">
<!-- Basic Bootstrap Table -->
<div class="card">
              <h5 class="card-header">All Messages</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Messages</th>
                      
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){

                    
                    
                    ?>
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data['id']; ?></strong></td>
                      <td><?php echo $data['user name']; ?></td>
                      
                      <td>
                      <?php echo $data['email']; ?> </td>
                      <td><?php echo $data['subject']; ?> </td>
                      <td><?php echo $data['message']; ?> </td>
                      
                    
                      <!-- <td>
                    
                      </td> -->
                      <!-- <td>
                        <img src="" alt="" width="50px" height="50px">
                      </td> -->
                      <td>
                        
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