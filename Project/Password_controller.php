<?php
    // Prepare and bind
    $stmt = $conn->prepare('SELECT * FROM users WHERE firstname = ? AND lastname = ?');
    $stmt->bind_param('ss', $firstname, $lastname);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // User found, update password
        $stmt = $conn->prepare('UPDATE users SET password = ? WHERE firstname = ? AND lastname = ?');
        $stmt->bind_param('sss', password_hash($newpassword, PASSWORD_DEFAULT), $firstname, $lastname);
        $stmt->execute();

        $_SESSION['message'] = 'Password changed successfully. Please login with your new password.';
        header('Location: index.php');
    } else {
        $_SESSION['error'] = 'No user found with the provided first name and last name.';
        header('Location: index.php');
    }

    // Close the statement and connection
    $stmt->close();
?>