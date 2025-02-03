<?php
session_start();

// Redirect to dashboard if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit();
}

// Fixed admin credentials
const ADMIN_USERNAME = 'admin';
const ADMIN_PASSWORD = 'adminpassword';

$error = ''; // Error message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        // Successful login
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        // Failed login
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
            background-image: linear-gradient(rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.3)), url('./Images/bg.jpg');
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(245, 245, 245,0.4);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
            transition: border-color 1s;
        }

        input:focus {
            border-color: #4CAF50;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ff5869;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff4444;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
            padding: 10px;
            background-color: #ffe6e6;
            border-radius: 4px;
            display: none;
        }

        .image{
            width: 100%;
            height :auto;

        }

        <?php if(isset($error)): ?>
        .error {
            display: block;
        }
        <?php endif; ?>
    </style>
</head>
<body>
    <div class="login-container">
        <form method="POST">
            <h2>Admin Login</h2>
            <img src="./Images/Dash.png" class="image">
            <?php if ($error): ?>
                <div class="error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <input type="text" name="username" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>