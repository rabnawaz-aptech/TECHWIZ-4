<?php 

include 'header.php';

$id=$_GET['Order_Id'];
$q1="DELETE FROM `orders` WHERE `Order_Id` = '$id'";

mysqli_query($db,$q1);

echo "<script>window.open('remainingorders.php','_self')</script>";

?>