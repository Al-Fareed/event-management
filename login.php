<?php
include './connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        echo "<script>alert('All fields are required!');</script>";
    } else {
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                // Store user details in session
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                
                // Set a persistent login cookie (optional)
                setcookie("user_session", session_id(), time() + (7 * 24 * 60 * 60), "/");

                echo "<script>alert('Login successful!');</script>";
                header("Location: index.php");
                exit;
            } else {
                echo "<script>alert('Incorrect password!');</script>";
            }
        } else {
            echo "<script>alert('User not found!');</script>";
        }

        $stmt->close();
    }
}

$conn->close();
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
            <h2>Login</h2>
            <form action="" method="POST">
                <label>Email</label>
                <input type="email" name="email" placeholder="amelielaurent7622@gmail.com" required>
                
                <label>Password</label>
                <input type="password" name="password" placeholder="Pass@12345" required>
                
                <button type="submit">Login</button>
            </form>
            <div class="social-buttons">
                <button class="apple">Apple</button>
                <button class="google">Google</button>
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
        <div class="image-section">
            
        </div>
    </div>
</body>
</html>

</body>
</html>