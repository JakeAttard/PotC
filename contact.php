<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Pastaciutta On The Coast">
  <meta name="keywords" content="HTML,CSS,PHP">
  <meta name="author" content="Jake Attard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/contactusstyle.css">
</head>

<body>
  <?php include('navbar.php'); ?>

  <h1>Contact Us</h1>

  <form name="contactform" method="post" action="contactform.php">
    <table width="450px" class="formtable">
      <tr>
        <td valign="top">
          <input type="text" name="first_name" maxlength="50" size="30" placeholder="First Name" required>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <input type="text" name="last_name" maxlength="50" size="30" placeholder="Last Name" required>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <input type="text" name="email" maxlength="80" size="30" placeholder="Email Address" required>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <input type="text" name="number" maxlength="30" size="30" placeholder="Mobile Number" required>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center">
          <input type="submit" value="Submit">
        </td>
      </tr>
    </table>
  </form>


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
