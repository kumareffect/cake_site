  <!DOCTYPE html>
  <html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="cake">
    <link rel="icon" href="assets/images/logo.svg" sizes="16x16">
    
    <title>Heavenly Bakery </title>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
  
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body>
  <?php
session_start(); 


if (!isset($_SESSION["user_id"])) {      
    header("Location: login.html"); 
    exit();
}


echo "<div style='font-size: 20px; padding-top: 10px; color: crimson; text-align: center; '> Welcome, <b><i>" . $_SESSION["username"] . "!</i></b> -><a style='text-decoration: none;' href='admin_logout.php'><span style='color: red;'> Logout Here</span></a></div>"; // You can customize this message


?>

    <div class="main-container">

  
        <header>
          <div class="head_container">
            <div class="logo">
              <img src="assets/images/menu-logo.svg">
            </div>
            <div class="menu" id="myTopnav">
              <ul>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
                <li><a href="index.php" class="active">Home</a></li>
            <li><a href="order.php">Shop</a></li>
            <li><a href="register.html" >Register</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="admin.html">Admin</a></li>
              </ul>
            </div>
          </div>
        </header>
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="Index.php">Home</a>
      <a href="order.php">Shop</a>
      <a href="register.html">Register</a>
      <a href="contactus.html">Contact Us</a>
      <a href="admin.html">Admin</a>
        </div>

      
        <div class="hero">
          <div class="overlay"></div>
          <div class="content">
            <img src="assets/images/logo.svg" alt="" width="160px">
            <h1>Heavenly Bakery </h1>
            <p>Indulge in heavenly delights, freshly baked with love at Heavenly Bakery! </p>
          </div>
        </div>

        
        <h1 class="slide-heading"> Our family signature cake design </h1>

        <img src="assets/images/1.jpg" id="main">
          <div id="thumbnails">
            <img src="assets/images/1.jpg">
            <img src="assets/images/2.jpg">
            <img src="assets/images/3.jpg">
            <img src="assets/images/4.jpg">
            <img src="assets/images/5.jpg">
            <img src="assets/images/6.jpg">
            <img src="assets/images/7.jpg">
            <img src="assets/images/8.jpg">
          </div>


          

          <footer>
            <div class="row">
              <div class="column">
                <h4>About Us</h4>
                <p>Indulge in heavenly delights, freshly baked with love at Heavenly Bakery!</p>
              </div>
              <div class="column">
                <h4>Quick Links</h4>
                <ul>
                <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
          <li><a href="order.php"><i class="fa fa-angle-right"></i> Shop</a></li>
          <li><a href="register.html"><i class="fa fa-angle-right"></i> Register</a></li>
          <li><a href="contactus.html"><i class="fa fa-angle-right"></i> Contact Us</a></li>
          <li><a href="admin.html"><i class="fa fa-angle-right"></i> Admin</a></li>
                </ul>
              </div>
              <div class="column">
                <h4>Connect with Us</h4>
                <ul class="social-icons">
                  <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
                </ul>
              </div>
            </div>


            <div class="main-copyright">
              &copy;
              <span id="copyright">
                  <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
              </span>
               Heavenly Bakery 
          </div>
          </footer>





        

   

  </div>
  <!-- script links -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>