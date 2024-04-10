<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container input[type="text"], .form-container input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .form-container button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <!-- your other body content here -->
    <div class="form-container">
        <h2>Change Password</h2>
        <form action="ChangePasswordController.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="newpassword" placeholder="New Password" required><br>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
            <button type="submit" name="edit">Change Password</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    </div>
</body>
</html>