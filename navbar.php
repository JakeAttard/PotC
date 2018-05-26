<header>
  <a href="menu.php" class="special"><strong>CLICK HERE TO SEE OUR MENU</strong></a>

      <?php if(isset($_SESSION['email'])){

        echo "<a href='#'>".$_SESSION['email']."</a>";
        echo "<a href='logout.php'>Logout</a>";
      }else{?>

  <a href="login.php">Login</a>
  <a href="register.php">Register</a>


     <?php }


       ?>

       <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
       <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
       <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
       <a href="https://www.tripadvisor.com.au/Restaurants" target="_blank"><i class="fab fa-tripadvisor"></i></a>
       </header>
       <nav>
         <ul>
           <li><a href="index.html">Home</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="menu.php">Menu</a></li>
           <li><a href="functions.php">Special Events</a></li>
           <li><a href="contact.php">Contact Us</a></li>
         </ul>
       </nav>
