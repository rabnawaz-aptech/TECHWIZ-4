<?php
include 'db.php';

// include 'header.php';
//   if(isset($_SESSION['profile'])){}
    if(isset($_SESSION['Profile'])){





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

}else{
    echo "<script>window.open('login.php','_self');</script>";
}



?>