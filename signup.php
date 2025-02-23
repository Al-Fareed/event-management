<?php 
include './connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate inputs
    if (empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('All fields are required!');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Check if the users table exists
        $checkTable = "SHOW TABLES LIKE 'users'";
        $result = mysqli_query($conn, $checkTable);

        if (mysqli_num_rows($result) == 0) {
            // If table doesn't exist, create it
            $createTable = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            if (!mysqli_query($conn, $createTable)) {
                die("Error creating table: " . mysqli_error($conn));
            }
        }

        // Check if user already exists
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $dup_user = $stmt->get_result();

        if ($dup_user->num_rows > 0) {
            echo "<script>alert('User with this email already exists');</script>";
        } else {
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert user data
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $hashed_password);
            
            if ($stmt->execute()) {
                // Retrieve the last inserted user ID
                $user_id = $stmt->insert_id;

                // Store user details in session
                $_SESSION["user_id"] = $user_id;
                $_SESSION["email"] = $email;

                // Redirect to index.php
                header("Location: index.php");
                exit;
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup UI</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            flex-direction: row-reverse;
            width: 80%;
            max-width: 900px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .signup-section {
            flex: 1;
            padding: 40px;
            background: linear-gradient(to bottom right, #fdfcfb, #e2d1c3);
        }
        .image-section {
            flex: 1;
            background: url('background.jpg') no-repeat center center/cover;
            position: relative;
            background-color: #ccc;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            margin-left: 1rem;
        }
        input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border-radius: 25px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background: #ffcc00;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
        }
        .social-buttons {
            border-radius: 25px;
            margin-top: 20px;
            display: flex;
            /* justify-content: center; */
            justify-content: space-between;
        }
        .social-buttons button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 48%;
        }
        .apple {
            background: black;
            color: white;
        }
        .google {
            background: #db4437;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="signup-section">
            <h2>Create an account</h2>
            <form action="" method="POST">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter e-mail" required>
                
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
                
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Re-enter password" required>
                
                <button type="submit">Submit</button>
            </form>
            <div class="social-buttons">
                <button class="apple">Apple</button>
                <button class="google">Google</button>
            </div>
            <p>Have an account? <a href="login.php">Sign in</a></p>
        </div>
        <div class="image-section">
        </div>
    </div>
</body>
</html>

</body>
</html>