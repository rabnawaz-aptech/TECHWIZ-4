<?php

include 'db.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="css/login.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->

<div class="login-form">    
    <form method="Post">

    	<center><h1>Login Form</h1></center>
        <section class="section-padding pb-0" >
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="Password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" name="password"  placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="signup.php" class="forgot-link">Dont have an Account? Signup.</a>
        </div> 
        <?php 

        if (isset($_POST['go'])) {

        $e = $_POST['email']; 
        $p = $_POST['password'];
        $q1 = "SELECT * FROM `users` WHERE `Email` ='$e' AND `Password`='$p' AND `Role`='Admin'";
        $q2 = "SELECT * FROM `users` WHERE `Email` ='$e' AND `Password`='$p'";
        $run1 = mysqli_query($db, $q1);
        $run2 = mysqli_query($db, $q2);
        $count1 = mysqli_num_rows($run1);
        $count2 = mysqli_num_rows($run2);

        if($count1 == 1){
        setcookie("admin", $e , time() + (86400 * 30) ,  "/");
        $_SESSION['Admin'] = $_COOKIE['admin'];
            echo "<script>window.open('../Admin Panel/index.php','_self');</script>";
        }elseif($count2 == 1){
            
            setcookie("email", $e , time() + (86400 * 30) ,  "/");
            $_SESSION['Profile'] = $_COOKIE['email'];
            echo "<script>window.open('index.php','_self');</script>";

        }else{

       echo "<div class='alert alert-warning'><b>Error!</b>Wrong Email or Password.</div>";
        }
    }
    
         ?>
        <input type="submit" name="go" class="btn btn-primary btn-block btn-lg" value="Sign in">              
    </form>			
    
</div>
</section>
</body>
</html>       
  
  
  
  
  