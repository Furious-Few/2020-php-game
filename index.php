<?php

session_start();

if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="splash-screen.css">
    <title>Space miner</title>
</head>
<body>
    <h1>Welcome to Space miner!</h1>
    <br>
    <div class="form">
    <h1>Space miner</h1>
    <p>Login to start playing the game!</p>
    <a href="login.php">Login</a>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <p>Or register if you dont have a account yet!</p>
    <a href="register.php">Register</a>
</div> 
</body>
</html>