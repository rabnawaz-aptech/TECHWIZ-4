<?php 

include 'header.php';

$id=$_GET['Plant_Id'];
$q="DELETE FROM `plants` WHERE `Plant_Id` = '$id'";

mysqli_query($con,$q);

echo "<script>window.open('allproduct.php','_self')</script>";

?>