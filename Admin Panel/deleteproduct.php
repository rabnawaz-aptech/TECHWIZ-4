<?php 

include 'header.php';

$id=$_GET['Plant_Id'];
$q1="DELETE FROM `plants` WHERE `Plant_Id` = '$id'";

mysqli_query($db,$q1);

echo "<script>window.open('allproduct.php','_self')</script>";

?>