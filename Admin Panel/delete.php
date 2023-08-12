<?php
include 'header.php';


?>

<?php

<?php 

include 'header.php';

$id=$_GET['User_Id'];
$q="DELETE FROM `users` WHERE `User_Id` = '$id'";

mysqli_query($con,$q);

echo "<script>window.open('allusers.php','_self')</script>";

?>

?>




<?php 

include 'footer.php';

?>