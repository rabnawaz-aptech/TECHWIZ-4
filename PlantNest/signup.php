<?php 

include 'db.php';

 ?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
    <form method="POST">
    	<center><h1>Sign Up Form</h1></center>
        <section class="section-padding pb-0">

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Username" required="required">
        </div>

         <div class="form-group">
            <input type="text" class="form-control" name="fname" placeholder="Full Name" required="required">
        </div>

         <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>

        <div class="form-group">
            <input type="Password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <?php 
        if(isset($_POST['go'])){
  $n=$_POST['name'];
  $f=$_POST['fname'];
  $e=$_POST['email'];
  $p=$_POST['password'];
  $r="customer";
  
  $q1="SELECT * FROM `users` WHERE `Email` LIKE '$e'";

  $run = mysqli_query($db,$q1);
  $count = mysqli_num_rows($run);

  if($count == 1){
  echo "<div class='alert alert-warning'  style='border-radius:25px'><b>Already registered!</b> go to login.</div>";
}else{
  $q="INSERT INTO `users`(`Username`,`FullName`,`Email`,`Password`,`Role`)VALUES('$n','$f','$e','$p','$r')";
  mysqli_query($db,$q);
  echo "<div class='alert alert-success'>Success!&nbsp;inserted &nbsp;&nbsp;</div>";
  header('location:login.php');
}


 
}
         ?>

        <input type="submit" class="btn btn-primary btn-block btn-lg" name="go" value="Sign in">              
    </form>			
    
</div>
</section>
</body>
</html>       
  
  
  
  
  