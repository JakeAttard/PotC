<?php
session_start();

include("connection.php");


if(isset($_POST['add_menu'])){


    $image=$_FILES['image']['name'];
       $tmp_image=$_FILES['image']['tmp_name'];








  move_uploaded_file($tmp_image,"uploads/$image");


mysqli_query($con,"insert into products(PRODUCTNAME,PRICE,DESCRIPTION,image)
                    values(
                    '{$_POST['name']}',
                    '{$_POST['price']}',
                    '{$_POST['description']}',
                    '{$image}')");

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
  <title>Add Menu</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/addmenu.css">
</head>

<body>

  <?php include('navbar.php'); ?>

  <div>

    <form action="" method="POST" class="form" enctype="multipart/form-data">

      <input type="text" name="name" Placeholder="Name">

      <input type="text" name="price" Placeholder="Price">

      <input type="text" name="description" Placeholder="Description">

      <div class="upload-btn-wrapper">
        <button class="btn">Upload a file</button>
        <input type="file" name="image" />
      </div>


      <input type="submit" name="add_menu" value="Add">

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
