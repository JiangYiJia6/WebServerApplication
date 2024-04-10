<?php
    session_start();

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    define('HOSTNAME', 'localhost');
    define('USERNAME' , 'root');
    define('PASSWORD', '');

    // Connect to the database
    $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,'users');

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare('SELECT * FROM visitors WHERE email = ?');
    $stmt->bind_param('s', $email);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // User found, check password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, redirect to index with success message
            $_SESSION['message'] = 'User found. You are logged in.';
            header('Location: index.php');
            exit();
        } else {
            // Password is incorrect, redirect to password change page
            /*$_SESSION['error'] = 'Incorrect password.';
            header('Location: index.php');
            exit();*/
        }
    } else {
        // No user found with the provided email
        $_SESSION['error'] = 'No user found with the provided email.';
        header('Location: index.php');
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
?>