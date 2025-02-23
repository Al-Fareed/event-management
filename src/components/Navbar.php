<?php
session_start();
include './connect.php';
if (isset($_SESSION['user_id']))
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <div class="logo"
        style="color: black;font-size: 1.2rem;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        Aura Events
    </div>
    <div>
        <a href="/src/pages/Home/home.html">Home</a>
    </div>
    <div>
        <a href="/src/pages/Home/home.html">Services</a>
    </div>
    <div>
        <a href="/src/pages/Home/home.html">Gallery</a>
    </div>
    <div>
        <a href="/src/pages/Home/home.html">Contact</a>
    </div>
    <div>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login/Sign Up</a>
        <?php endif; ?>
    </div>
</div>
</body>
</html>