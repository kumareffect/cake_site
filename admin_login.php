<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo.svg" sizes="16x16">
    <link rel="stylesheet" href="assets/css/form_admin.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Heavenly Bakery - Admin</title>
  
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
        <div class="inner-main">
            <h1 class="slide-heading">Uploading Service of Heavenly Bakery</h1>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" id="image" required><br>
                <input style="width: 60%;" placeholder="Title Here" type="text" name="title" class="title" required><br>
                <input style="width: 60%;" placeholder="Item Price" type="text" name="price" class="price" required><br>
                <span style="text-align: center";><h3> <a href="update.php">Click here to update</a></h3></span>
                <input style="width: 60%;" type="submit" name="upload" class="btn" value="Upload">
            </form>
            <span style="text-align: center; position: relative; top: 20px"><h3><a href=retrieve.php>click here for retrieving information !</a></h3<></span>
           
           
        </div>
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
