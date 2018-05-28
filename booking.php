<?php
session_start();

  if(!isset($_SESSION['email'])){



      header("location:login.php");
        }



include("connection.php");


if(isset($_POST['book'])){


mysqli_query($con,"insert into booking(arrival_time,seats,booking_date,customer_email)
                    values(
                    '{$_POST['arrival_time']}',
                    '{$_POST['seats']}',
                    '{$_POST['booking_date']}',
                    '{$_SESSION['email']}'
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
  <meta charset="UTF-8">
  <meta name="description" content="Pastaciutta On The Coast">
  <meta name="keywords" content="HTML,CSS,PHP">
  <meta name="author" content="Jake Attard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">

  <link rel="stylesheet" href="./stylesheets/bookingstyle.css">
  <link rel="stylesheet" href="./stylesheets/styles.css">


</head>

<body>
  <?php include('navbar.php'); ?>

  <div>

    <form action="" method="POST" class="form">

      <input type="text" name="arrival_time" Placeholder="Time of Arrival" required>

      <input type="text" name="seats" Placeholder="Number of Seats" required>

      <input type="date" name="booking_date" Placeholder="Date" required>

      <input type="submit" name="book" value="Book">

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
