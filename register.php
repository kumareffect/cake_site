<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 

    $dbname = "cake"; 
    

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST["usrname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = password_hash($_POST["psw"], PASSWORD_DEFAULT); 
    
    
    $check_email_sql = "SELECT email FROM users WHERE email = ?";
    $check_email_stmt = mysqli_prepare($conn, $check_email_sql);
    mysqli_stmt_bind_param($check_email_stmt, "s", $email);
    mysqli_stmt_execute($check_email_stmt);
    mysqli_stmt_store_result($check_email_stmt);
    
    if (mysqli_stmt_num_rows($check_email_stmt) > 0) {
        echo "Error: Email already exists. Please choose a different email.";
    } else {
        $insert_sql = "INSERT INTO users (name, email, number, password) VALUES (?, ?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_sql);
        mysqli_stmt_bind_param($insert_stmt, "ssis", $name, $email, $number, $password);
        
        if (mysqli_stmt_execute($insert_stmt)) {
            echo "Registration successful!";
            echo "</br>";
            echo "<a href='login.html'>Click here to login</a>";
        } else {
            echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
        }
    }
    
    
    mysqli_close($conn);
}
?>
