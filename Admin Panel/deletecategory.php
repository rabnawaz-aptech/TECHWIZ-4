<?php

include 'header.php';
?>


<?php 


$id=$_GET['Category_Id'];
$q="DELETE FROM `categories` WHERE `Category_Id` = '$id'";

mysqli_query($con,$q);

echo "<script>window.open('allcategory.php','_self')</script>";

?>





<?php

include 'footer.php';

?>