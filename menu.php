<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Pastaciutta On The Coast">
  <meta name="keywords" content="HTML,CSS,PHP">
  <meta name="author" content="Jake Attard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/menustyle.css">
</head>

<body>
  <?php include('navbar.php'); ?>

         <h1>Menu</h1>

         <li>
           <form action="search.php" method="GET"><input type="text" name="search" placeholder="Search for your favourite dish!"><input type="submit" value="Search"></form>
         </li>

         <div style="width:50%;margin:0 auto; padding-top:50px;">

<?php
$result =mysqli_query($con,"select * from products");
  while($product=mysqli_fetch_assoc($result)){

    ?>

<div class="menu-item-card">
  <div class="item-image" style="background-image: url(&quot;uploads/<?=$product['image']?>&quot;);">
  </div>
  <div class="item-content">
    <div class="top-line">
      <div class="item-name"><?=$product['PRODUCTNAME']?></div>
      <div class="item-dots"><div class="dots"></div>
    </div>
    <div class="item-price"><?=$product['PRICE']?></div>
    </div>
    <div class="item-description"><?=$product['DESCRIPTION']?></div>
  </div>
</div>
 <?php }
?>


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
