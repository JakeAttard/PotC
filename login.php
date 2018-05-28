<?php
session_start();
include("connection.php");


if(isset($_POST['login'])){


$result=mysqli_query($con,"Select * from customers where email='{$_POST['email']}' and  password='{$_POST['password']}' limit 1");

while ($row=mysqli_fetch_assoc($result)) {

      $_SESSION['email']=$row['email'];



      header("location:booking.php");



}

echo mysqli_error($con);




}


?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Pastaciutta On The Coast">
  <meta name="keywords" content="HTML,CSS,PHP">
  <meta name="author" content="Jake Attard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/loginstyle.css">

</head>

<body>
  <?php include('navbar.php'); ?>

  <div>
    <form action="" method="POST" class="form">
      <input type="type" name="email" Placeholder="Email" required>
      <input type="password" name="password" Placeholder="Password" required>
      <input type="submit" name="login" value="Login">
    </form>
  </div>

  <div id="footer">
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
