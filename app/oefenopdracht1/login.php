<?php
$host = "mysql";      
$username = "root";      
$password = "root";     
$dbname = "database"; 
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $enteredUsername);
$stmt->execute();
$stmt->bind_result($storedHashedPassword);
$stmt->fetch();
$stmt->close();

if ($storedHashedPassword === null) {
    echo "Invalid username or password.";
} else {
    if (password_verify($enteredPassword, $storedHashedPassword)) {

        echo "Login successful!";
    } else {

        echo "Invalid username or password.";
    }
}
echo "$storedhashedpassword";

$conn->close();
?>