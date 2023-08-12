<?php 

include 'header.php';

?>


<?php 

$id=$_GET['Plant_Id'];

$q="SELECT * FROM `plants` WHERE `Plant_Id` = '$id'";
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
                    <h5 class="mb-0">Edit Products</h5>
                    <small class="text-muted float-end"></small>
                  </div>
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                      <div class="row mb-3">
                        <?php 
                        
                        while($data=mysqli_fetch_assoc($row)){

                        ?>
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="" name="Name" value="<?php echo $data['Name']; ?>"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Images</label>
                        <div class="col-sm-10">
                            <img src=" <?php echo $data['Image_Url'] ?> " alt="" width="50px" height="50px">
                            <br><br>
                          <input type="file" class="form-control" id="basic-default-company" placeholder="" name="Image_Url12"/>
                        </div>
                      </div>
                      <!-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                      </div> -->
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Price</label>
                        <div class="col-sm-10">
                          <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="" name="Price" aria-label="658 799 8941" aria-describedby="basic-default-phone" value=" <?php echo $data['Price']; ?> " />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message" name="">Description</label>
                        <div class="col-sm-10">
                          <input id="basic-default-message" class="form-control" placeholder="" name="Description" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" value="<?php echo $data['Description']; ?>"></input>
                        </div>
                      </div>
                      <div class="row mb-3">
                        
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Catergory ID</label>
                            
                        <div class="col-sm-10">
                        <select class="form-select" name="Category_Id">
                        <?php 

                            $q1="SELECT * FROM `categories`";
                            $row=mysqli_query($con,$q1);
                            while($data=mysqli_fetch_assoc($row)){
                         ?>
                        <option value="<?php echo $data['Category_Id']; ?>"> <?php echo $data['Name']; ?> </option>
                            
                        </select>
                          <!-- <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="" aria-label="658 799 8941" aria-describedby="basic-default-phone" /> -->
                        </div>
                      </div>
                                
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                      </div>
                      <?php }} ?>
                    </form>
                  </div>
                </div>
              </div>
</div>


<?php 

if(isset($_POST['update'])){
    $n=$_POST['Name'];
    

    $f=$_FILES['Image_Url12']['name'];
    $src=$_FILES['Image_Url12']['tmp_name'];
    $des="../PlantNest/img/bg-img/".$f;
    move_uploaded_file($src,$des);
    
    $p=$_POST['Price'];
    $d=$_POST['Description'];
    $c=$_POST['Category_Id'];


    $q2="UPDATE `plants` SET `Name`='$n', `Image_Url`='$des', `Price`='$p', `Description`='$d', `Category_Id`='$c' WHERE `Plant_Id`='$id' ";
    mysqli_query($con,$q2);
    echo "<script>window.open('allproduct.php','_self')</script>";
}

?>







<?php 

include 'footer.php';

?>