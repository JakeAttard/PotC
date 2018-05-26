<?php
session_start();

include("connection.php");


if(isset($_POST['register'])){


mysqli_query($con,"insert into customers(FIRSTNAME,LASTNAME,email,password,PHONE,ADDRESS)
                    values(
                    '{$_POST['firstname']}',
                    '{$_POST['lastname']}',
                    '{$_POST['email']}',
                    '{$_POST['password']}',
                    '{$_POST['phone']}',
                    '{$_POST['address']}'
                    )");


if(!mysqli_error($con)){

$_SESSION['email']=$_POST['email'];

header("location:booking.php");


}
else{
echo mysqli_error($con);




}
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
       <link rel="stylesheet" href="./stylesheets/styles.css">
       <link rel="stylesheet" href="./stylesheets/registerstyle.css">

  </head>
  <body>
    <?php include('navbar.php'); ?>

<div>

    <form action="" method="POST" class="form">

       <input type="text" name="firstname" Placeholder="First name" required>

       <input type="text" name="lastname" Placeholder="Last Name" required>

       <input type="text" name="address" Placeholder="Address" required>

       <input type="text" name="phone" Placeholder="Phone Number" required>

      <input type="type" name="email" Placeholder="Email" required>

      <input type="password" name="password" Placeholder="Password" required>

      <input type="submit" name="register" value="Register" required>

  </form>

</div>

<div id="footer" >
  <span class="footer-item">Phone: 1111 1111</span> <span class="footer-item">Email: inquiry@potc.com</span>
    <span class="footer-item">          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.tripadvisor.com.au/Restaurants" target="_blank"><i class="fab fa-tripadvisor"></i></a>
          </span>

         <span class="footer-item"> Address: 23 King Street Paradise Point 4216</span>

</div>
  </body>
</html>
