<?php 

include 'header.php';


if(isset($_POST['add'])){
    $n=$_POST['Name'];
    

    $q1="INSERT INTO `categories` (`Name`) VALUES ('$n')";
    mysqli_query($db,$q1);
}


?>


<br><br>
<div class="container">

<!-- Basic Layout & Basic with Icons -->
<div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Category</h5>
                    <small class="text-muted float-end"></small>
                  </div>
                  <div class="card-body">
                    <form method="POST">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="" name="Name" />
                        </div>
                      </div>
                      
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" name="add">Add</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              </div>












<?php

include 'footer.php';

?>
