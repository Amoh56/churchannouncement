<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Display the username or any other information about the logged-in user
    echo "Logged in as: " . $username;
} else {
    // If the user is not logged in, redirect to the login page or any other appropriate action
    header("Location: /myprojo/admin/adminlogin.php");
    exit();
}

// Logout the user
session_destroy();
// Redirect the user to the login page or any other appropriate action
header("Location: /myprojo/admin/adminlogin.php");
exit();
?>
