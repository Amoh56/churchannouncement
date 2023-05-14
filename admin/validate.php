<?php
session_start(); // Start the session

include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the user is not logged in, redirect back to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /myprojo/adminlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminname = test_input($_POST["uname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user) {
        if (($user['uname'] == $adminname) &&
            ($user['password'] == $password)) {
            // Store the logged-in status in a session variable
            $_SESSION['loggedin'] = true;
            header("Location: /myprojo/admin/databasetowebpage.php");
            exit(); // Terminate the script
        }
    }

    // If the loop completes without finding a valid user, redirect back to the login page
    header("Location: /myprojo/adminlogin.php");
    exit();
}

// If the script reaches this point, it means the user has not logged in or accessed this page directly without logging in
// Add your code here to handle unauthorized access, such as redirecting to a login page or displaying an error message.
session_destroy(); // Destroy the session and log the user out
header("Location: /myprojo/adminlogin.php");
exit();
?>
