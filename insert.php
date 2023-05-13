<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result after trying to send to secretary</title>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myprojo";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking all five values from the form data and sanitizing them
        $Sname = mysqli_real_escape_string($conn, $_REQUEST['Sname']);
        $date = mysqli_real_escape_string($conn, $_REQUEST['date']);
        $org = mysqli_real_escape_string($conn, $_REQUEST['org']);
        $announcement = mysqli_real_escape_string($conn, $_REQUEST['announcement']);

        // Performing insert query execution
        $sql = "INSERT INTO sender (sender_name, date, organization, announcement) VALUES ('$Sname', '$date', '$org', '$announcement')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Your Announcement Request Has Been Successfully Forwarded to The Church</h3>";
            echo nl2br("\n$Sname \n$date\n$org \n$announcement");
        } else {
            echo "ERROR: Sorry, there was an issue with the query: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
