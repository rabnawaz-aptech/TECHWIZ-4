<?php

include 'header.php';

?>

<?php

$id=$_GET['Category_Id'];

$q="SELECT * FROM `categories` WHERE `Category_Id` = '$id'";
$row=mysqli_query($con,$q);


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
                      <?php 
                        
                        while($data=mysqli_fetch_assoc($row)){

                        ?>
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="" name="Name" value="<?php echo $data['Name']; ?>" />
                        </div>
                      </div>
                      
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                      </div>
                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
              </div>


<?php 



if(isset($_POST['update'])){
    $n=$_POST['Name'];
    

   
    $q2="UPDATE `categories` SET `Name`='$n' WHERE `Category_Id`='$id' ";
    mysqli_query($con,$q2);
    echo "<script>window.open('allcategory.php','_self')</script>";
}

?>





<?php

include 'footer.php';

?>