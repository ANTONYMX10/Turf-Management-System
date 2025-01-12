<?php
// process_login.php

// Hardcoded credentials for demo (in a real app, use a database)
$valid_username = "admin";
$valid_password = "password123";  // Use hashed passwords in production

// Get the login details from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the credentials are correct
if ($username === $valid_username && $password === $valid_password) {
    // Set a session cookie with no expiration time, so it expires when the browser is closed
    setcookie('username', $username, 0, '/');  // Session cookie expires on browser close

    // Redirect to dashboard
    header("Location: header.php");
    exit();
} else {
    // If login failed, redirect back to login page with an error message
    header("Location: login.php?error=1");
    exit();
}
?>
