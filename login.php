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
    
    
    $sql = "SELECT id, name, email, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    
    
    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["name"];
        header("Location: index.php"); 
    } else {
        echo "Invalid email or password. Please try again.";
    }
    
    
    mysqli_close($conn);
}
?>
