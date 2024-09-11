<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cake";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $email = $_POST["email"];
    $password = $_POST["psw"];

    
    $sql = "SELECT id, email FROM admins WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        header("Location: admin_login.php"); 
    } else {
        echo "Invalid email or password. Please try again.";
    }

    
    mysqli_close($conn);
}
?>

