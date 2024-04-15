<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials (e.g., check against database)
    // ...

    // Set session variables
    $_SESSION['username'] = $username;

    // Redirect to dashboard or another page
    header('Location: dashboard.php');
    exit;
}

session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('Location: index.html');
    exit;
}

// Display user-specific content
echo 'Welcome, ' . $_SESSION['username'];
?>