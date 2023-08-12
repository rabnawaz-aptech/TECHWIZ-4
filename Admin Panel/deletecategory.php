<?php

include 'header.php';



$id=$_GET['Category_Id'];
$q1="DELETE FROM `categories` WHERE `Category_Id` = '$id'";
$q2="DELETE FROM `plants` WHERE `Category_Id` = '$id'";
$q3="DELETE FROM `orders` WHERE `Plant_Id` = '$id'";

mysqli_query($db,$q3);
mysqli_query($db,$q2);
mysqli_query($db,$q1);

echo "<script>window.open('allcategory.php','_self')</script>";



include 'footer.php';

?>