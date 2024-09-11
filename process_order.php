<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cake";

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $cartData = json_decode(file_get_contents('php://input'), true);

    
    foreach ($cartData as $item) {
        $title = mysqli_real_escape_string($conn, $item['title']);
        $price = $item['price'];
        $quantity = $item['quantity'];

        $sql = "INSERT INTO cart_items (title, price, quantity) VALUES ('$title', $price, $quantity)";
        
        if (mysqli_query($conn, $sql) !== true) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    
    mysqli_close($conn);
}
?>
