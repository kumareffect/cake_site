<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cake";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "<h2>Connection is successful for the user by the servername - '" . $servername . "', and Username - '" . $username . "' with the database '" . $dbname . "'.</h2>" ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update_product"])) {
        
        $product_id = $_POST["product_id"];
        $newTitle = $_POST["new_title"];
        $newPrice = $_POST["new_price"];

    
        $updateSql = "UPDATE products SET title = '$newTitle', price = '$newPrice' WHERE id = '$product_id'";
        if (mysqli_query($conn, $updateSql)) {
            echo "<script>alert('Product updated successfully.');</script>";
        } else {
            echo "Error updating product: " . mysqli_error($conn);
        }
    }
}


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
    <title>Heavenly Bakery - Update Product</title>
    
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
            <h1 class="slide-heading">Updating items of Heavenly Bakery</h1>
            <form method="post" action="">
                <select id="product_id" name="product_id">
                    <?php
                    $productQuery = "SELECT id, title FROM products";
                    $productResult = mysqli_query($conn, $productQuery);
                    while ($row = mysqli_fetch_assoc($productResult)) {
                        echo "<option value='{$row["id"]}'>{$row["title"]}</option>";
                    }
                    ?>
                </select>
                <input type="text" placeholder="Title" id="new_title" name="new_title" required>
                <br><br>
                <input type="number" placeholder="Price" id="new_price" name="new_price" step="0.01" required>
                <br><br>
                <button type="submit" name="update_product">Update Product</button>
            </form>
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
