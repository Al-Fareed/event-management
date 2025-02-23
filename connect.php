<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "event_management";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$db_selected = mysqli_select_db($conn, $db);

if (!$db_selected) {
    $sql = "CREATE DATABASE $db";
    if (mysqli_query($conn, $sql)) {
        echo "<script>console.log('Database created successfully');</script>";
    } else {
        die("Error creating database: " . mysqli_error($conn));
    }
}

$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn) {
    echo "<script>console.log('Connected to database successfully');</script>";
} else {
    die("Database connection failed: " . mysqli_connect_error());
}


?>
