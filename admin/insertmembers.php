<?php
//session_start();
//include_once("connection.php");

if (isset($_POST['add-members-btn'])) {
    $conn = mysqli_connect("localhost", "root", "", "myprojo");
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $jumuiya = $_POST['jumuiya'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['middlename'];
    $surname = $_POST['surname'];

    // Construct the table name based on the Jumuiya
    $tableName = strtolower($jumuiya) . "members";

    // Check if the member already exists in the database
    $selectQuery = "SELECT * FROM $tableName WHERE firstname = ? AND middlename = ? AND surname = ?";
    $stmt = mysqli_prepare($conn, $selectQuery);
    mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $surname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "Member already exists";
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit;
    }

    // Prepare the SQL statement with placeholders
    $insertQuery = "INSERT INTO $tableName VALUES (NULL, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);

    if ($stmt === false) {
        die("ERROR: Could not prepare statement. " . mysqli_error($conn));
    }

    // Bind the parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $surname, $jumuiya);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Member added successfully";
    } else {
        echo "Error adding member: " . mysqli_stmt_error($stmt);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the connection
    mysqli_close($conn);
}

// Rest of the code for the DELETE operation...


// Rest of the code for the DELETE operation...


// Check if the delete button is clicked
if (isset($_POST['delete-members-btn'])) {
    // Retrieve the values from the form
    $jumuiya = $_POST['jumuiya'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['middlename'];
    $surname = $_POST['surname'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "", "myprojo");

    // Check if the connection was successful
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Construct the table name based on the Jumuiya
    $tableName = strtolower($jumuiya) . "members";

    // Construct the DELETE query
    $deleteQuery = "DELETE FROM $tableName WHERE firstname='$firstname' AND middlename='$lastname' AND surname='$surname'";

    // Execute the DELETE query
    if (mysqli_query($connection, $deleteQuery)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>



 

