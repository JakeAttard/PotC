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
    <meta charset="utf-8">
    <title>Add Menu</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="./stylesheets/styles.css">
    <link rel="stylesheet" href="./stylesheets/addmenu.css">
  </head>
  <body>
    <header>
        <a href="menu.php" class="special"><strong>CLICK HERE TO SEE OUR MENU</strong></a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.tripadvisor.com.au/Restaurants" target="_blank"><i class="fab fa-tripadvisor"></i></a>
</header>
<nav>
  <ul>
    <a href="index.html"><li>Home</li></a>
    <a href="about.html"><li>About</li></a>
    <a href="menu.php"><li>Menu</li></a>
    <a href="functions.html"><li>Special Events</li></a>
    <a href="contact.html"><li>Contact Us</li></a>
  </ul>
</nav>

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