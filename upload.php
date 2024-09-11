<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cake";

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $title = $_POST["title"];
    $price = $_POST["price"];

    
    $target_dir = "uploads/"; 
    $image_name = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($image_name);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO products (title, price, image_name) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sds", $title, $price, $image_name);

        if (mysqli_stmt_execute($stmt)) {
            echo "Product added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    
    mysqli_close($conn);
}
?>

