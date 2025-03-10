<?php
session_start();

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Online Banking</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(201, 201, 201);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            width: 400px;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            background: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background: #218838;
        }
        img.logo {
            width: 80px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Online Banking System</h1>
        <p>Manage your transactions securely and efficiently.</p>
        <img src="bank_logo.png" alt="Bank Logo" class="logo">
        
        <form action="login.php">
            <button type="submit" class="btn">Login</button>
        </form>

        <form action="register.php">
            <button type="submit" class="btn">Register</button>
        </form>
    </div>

</body>
</html>
