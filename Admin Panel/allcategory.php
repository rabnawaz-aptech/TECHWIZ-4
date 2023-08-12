<?php

include 'header.php';

?>

<?php

$q="SELECT * FROM `categories`";
$row=mysqli_query($con,$q);


?>

<br><br>

<div class="container">
<!-- Basic Bootstrap Table -->
<div class="card">
              <h5 class="card-header">All Categories</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th></th>
                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){

                    
                    
                    ?>
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data['Category_Id']; ?></strong></td>
                      <td><?php echo $data['Name']; ?></td>
                      
                      <td>
                      <a href="editcategory.php?Category_Id=<?php echo $data['Category_Id']; ?>">Edit</a>
                      </td>
                    
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





<?php include 'footer.php'; ?>