<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cake";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>  
  <!DOCTYPE html>
  <html lang="en">
  <head>

  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="cake">
  
    <link rel="icon" href="assets/images/logo.svg" sizes="16x16">
    
    <title>Heavenly Bakery</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script src="assets/js/store.js" async></script>

  </head>

  <body>
    <div class="main-container">

    <!-- Navbar -->
        <header>
          <div class="head_container">
            <div class="logo">
              <img src="assets/images/menu-logo.svg">
            </div>
            <div class="menu" id="myTopnav">
              <ul>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
                <li><a href="index.php">Home</a></li>
            <li><a href="order.php" class="active">Shop</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="contactus.html" >Contact Us</a></li>
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

 
        
    

        <h1 class="slide-heading"> Shop </h1>


  
        <section class="container content-section">
          <div class="main-container">

          
          <div class="shop-items">
              <div class="shop-item">
                  <span class="shop-item-title">Chocolate Cake</span>
                  <img class="shop-item-image" src="assets/images/3.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$12.99</span>
                      <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                  </div>
              </div>

              <div class="shop-item">
                  <span class="shop-item-title">Berries Cake</span>
                  <img class="shop-item-image" src="assets/images/4.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$14.99</span>
                      <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                  </div>
              </div>

              <div class="shop-item">
                  <span class="shop-item-title">choco cake </span>
                  <img class="shop-item-image" src="assets/images/5.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$9.99</span>
                      <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                  </div>
              </div>

              <div class="shop-item">
                <span class="shop-item-title">pineapple cake</span>
                <img class="shop-item-image" src="assets/images/6.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$9.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
              <span class="shop-item-title">Cup Cake</span>
              <img class="shop-item-image" src="assets/images/7.jpg">
              <div class="shop-item-details">
                  <span class="shop-item-price">$9.99</span>
                  <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
              </div>
          </div>

          <div class="shop-item">
            <span class="shop-item-title">Cookies</span>
            <img class="shop-item-image" src="assets/images/8.jpg">
            <div class="shop-item-details">
                <span class="shop-item-price">$9.99</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>

        <div class="shop-item">
          <span class="shop-item-title">tall cake</span>
          <img class="shop-item-image" src="assets/images/2.jpg">
          <div class="shop-item-details">
              <span class="shop-item-price">$9.99</span>
              <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
          </div>
      </div>

      <div class="shop-item">
        <span class="shop-item-title">chocolate cake</span>
        <img class="shop-item-image" src="assets/images/1.jpg">
        <div class="shop-item-details">
            <span class="shop-item-price">$9.99</span>
            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
        </div>
    </div>



        
<?php
      
$sql = "SELECT id, title, price, image_name FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='shop-item'>";
        echo "<span class='shop-item-title'>" . $row["title"] . "</span>";
        echo "<img class='shop-item-image' src='uploads/" . $row["image_name"] . "'>";
        echo " <div class='shop-item-details'>";
        echo "<span class='shop-item-price'>$". $row["price"] . "</span>";
        echo "<button class='btn btn-primary shop-item-button' type='button'>ADD TO CART</button>";
        echo "</div>";
        echo "</div>";
    }

} 

mysqli_close($conn);
?>


  


          </div>
      </section>
     
      <section class="container content-section">
          <h2 class="section-header">CART</h2>
          <div class="cart-row">
              <span class="cart-item cart-header cart-column">ITEM</span>
              <span class="cart-price cart-header cart-column">PRICE</span>
              <span class="cart-quantity cart-header cart-column">QUANTITY</span>
          </div>
          <div class="cart-items">
          </div>
          <div class="cart-total">
              <strong class="cart-total-title">Total</strong>
              <span class="cart-total-price">$0</span>
          </div>
          <button class="btn btn-primary btn-purchase" type="button">Order Now</button>
          </section>
          </section>
      </section>















          <!-- Footer -->

          <footer>
            <div class="row">
              <div class="column">
                <h4>About Us</h4>
                <p>Indulge in heavenly delights, freshly baked with love at Heavenly Bakery!</p>
              </div>
              <div class="column">
                <h4>Quick Links</h4>
                <ul>
                <li><a href="Index.php"><i class="fa fa-angle-right"></i> Home</a></li>
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
               Heavenly Bakery & Pastry
          </div>
          </footer>





        

   

  </div>
  <!-- script links -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>