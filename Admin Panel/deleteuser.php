<?php
include 'header.php';





$id=$_GET['User_Id'];
$q1="DELETE FROM `users` WHERE `User_Id` = '$id'";
$q2="DELETE FROM `orders` WHERE `User_Id` = '$id'";

// print_r($q1);
// exit();

mysqli_query($db,$q2);
mysqli_query($db,$q1);


echo "<script>window.open('allusers.php','_self')</script>";



include 'footer.php';

?>