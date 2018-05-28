<?php

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
    <title>Menu Search</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="./stylesheets/styles.css">
    <link rel="stylesheet" href="./stylesheets/menustyle.css">
  </head>
  <body>

    <?php include('navbar.php'); ?>


<div style="width:50%;margin:0 auto; padding-top:50px;">
<?php

$search=$_GET['search'];
$result =mysqli_query($con,"select * from products where PRODUCTNAME like '%$search%'");
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
  <p>Phone: 1111 1111 Email: inquiry@potc.com
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.tripadvisor.com.au/Restaurants" target="_blank"><i class="fab fa-tripadvisor"></i></a>
          Address: 23 King Street Paradise Point 4216
        </p>
</div>
  </body>
</html>
