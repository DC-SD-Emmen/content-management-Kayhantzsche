<?php

$host = "mysql"; // Le host est le nom du service, présent dans le docker-compose.yml
$dbname = "my-wonderful-website";
$charset = "utf8";
$port = "3306";
?>

<html>
<head>
    <title>Drenthe College docker web server</title>
</head>
<body>

<link rel="stylesheet" href="stylesheet.css">

<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
