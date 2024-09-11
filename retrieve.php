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
  <div class="main-container">
        <header>
            <div class="head_container">
                <div class="logo">
                    <img src="assets/images/menu-logo.svg">
                </div>
                <div class="menu" id="myTopnav">
                    <ul>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="order.php">Shop</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="admin.html">Admin</a></li>
                    </ul>
                </div>
            </div>
        </header>
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="order.php">Shop</a>
            <a href="register.html">Register</a>
            <a href="contactus.html">Contact Us</a>
            <a href="admin.html">Admin</a>
        </div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cake";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, title, price, image_name FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Title: " . $row["title"] . "<br>";
        echo "Price: $" . $row["price"] . "<br>";
        echo "Image: <img src='uploads/" . $row["image_name"] . "' width='100'><br>";
        echo "<hr>";
    }
} else {
    echo "No products found.";
}


mysqli_close($conn);
?>
  
  <footer>
   
      <div class="main-copyright">
      &copy;
      <span id="copyright">
        <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
      </span>
      Heavenly Bakery 
    </div>
  </footer>
  </div>
  
  <script src="assets/js/main.js"></script>
  </body>
  </html>