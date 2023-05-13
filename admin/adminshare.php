<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result after admin tries to update announcement</title>
</head>
<body>
    <center>
        <?php
        // Servername => localhost
        // Username => root
        // Password => empty
        // DB Name => myprojo

        $conn = mysqli_connect("localhost", "root", "", "myprojo");
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect to the database. " . mysqli_connect_error());
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO toannouncement (sender_name, date, organization, announcement) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $Sname, $date, $org, $announcement);

        // Retrieve values from the form data
        $Sname = $_REQUEST['Sname'];
        $date = $_REQUEST['date'];
        $org = $_REQUEST['org'];
        $announcement = $_REQUEST['announcement'];

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<h3>Announcement Has Been Updated Successfully</h3>";
            echo nl2br("\n$Sname \n" . "$date\n" . "$org \n" . "$announcement");
        } else {
            echo "ERROR: Hush! Sorry, there was an error. " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
