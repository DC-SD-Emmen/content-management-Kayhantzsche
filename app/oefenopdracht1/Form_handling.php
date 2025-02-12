<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo "LOGIN SUCCESSFULL!";
}   













    
?>
