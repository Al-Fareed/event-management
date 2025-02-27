<?php
include './connect.php';

// Get current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: fixed;
            z-index: 10;
            padding-bottom: 0;
        }

        .navbar div {
            margin: 1rem 3rem;
        }

        .navbar a {
            color: white;
            padding: 0.5rem;
            text-decoration: none;
            display: inline-block;
            transition: border-bottom 0.3s ease-in-out;
        }

        .navbar a.active {
            border-bottom: 2px solid white;
        }

        .navbar a.active {
            border-bottom: 2px solid white;
        }

        .logo {
            background-color: white;
            /* padding: 0.4rem; */
            border-radius: 2px;
            color: black;
            /* width: 4vw; */
        }

        .navbar a:hover {
            background-color: white;
            color: black;
            border-radius: 1px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">Aura Events</div>

        <div><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></div>
        <div><a href="services.php" class="<?= ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></div>
        <div><a href="gallery.php" class="<?= ($current_page == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></div>
        <div><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></div>

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