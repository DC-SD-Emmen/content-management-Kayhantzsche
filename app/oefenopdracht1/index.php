<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
    <a href="login.php">Logout</a>
</body>
</html>