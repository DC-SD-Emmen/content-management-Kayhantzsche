<?php
$servername = "mysql";
$username = "root"; 
$password = "root"; 
$database = "database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$newusername = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully! ";
    echo "Hashed Password: " . $hashedPassword;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    

