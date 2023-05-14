<?php
session_start();

// Check if the user is not logged in, redirect back to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /myprojo/admin/adminlogin.php");
    exit();
}
//<!-- this is the page that fetches the announcement requested by web user -->

// PHP code to establish connection
// with the localserver

// Username is root
$user = 'root';
$password = '';

// Database name is loginpage
$database = 'myprojo';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM sender ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!--HTML code to display data in tabular format-->
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>Admin Make Announcements</title>

	<!-- CSS FOR STYLING THE PAGE -->
	
</head>
<style>
			/* manage member icon */
	.user-icon {
		width: 15px; /* Adjust the width as needed */
		height: 20px; /* Adjust the height as needed */
		fill: #000; /* Adjust the fill color as needed */
		}

	.container {
		display: flex;
		}

	table {
		width: 50%; /* Adjust the width as needed */
		}

	form {
		width: 50%; /* Adjust the width as needed */
		display: flex;
		flex-direction: column;
		align-items: center;

		}
		/* full width inputs */
	input[type=text],
        input[type=date],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solis #ccc;
            box-sizing: border-box;
        }
		/* centering the button */
		button {
			margin-top: 10px; /* Adjust the margin as needed */
			background-color: green;
		}
		/* *the css setting table styles */
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px;
			padding: 0;
		}

		h1 {
			text-align: left;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			border: 1px solid black;
		}
		th{
			background-color: green;
			color: white;

		}
		.maintable {
		border-collapse: collapse;
		}

		.maintable th,
		.maintable td {
			border: none;
		}


		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		#maintable tr:nth-child(2n+1) {
  			background-color: #e0e0e0; /* Set background color for alternate rows */
		}
		.admin-nav {
			display: flex;
			justify-content: center;
			align-items: center;
			border: 2px solid #fff;
			background-color: #f1f1f1;
			padding: 20px;
			border-radius: 10px;
			background-color: green;
		}
		.contact-icon {
			display: inline-block;
			margin: 0 10px;
			font-size: 24px;
			color: #333; /* Set the icon color as desired */
		}
		.login-section {
            position: absolute;
            top: 10px;
            right: 10px;
			align-items: left;
        }

        .login-section form {
            display: block;
            margin: left;
        }
		/* Media query for small screens */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  table, form {
    width: 100%;
  }
}

</style>

<body>
<div class="login-section">
        <?php
        // session_start();

        // Check if the user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            echo "Logged in as: " . $_SESSION['username'] . " | ";
			echo '<a href="logout.php">Logout</a>';


        } else {
            echo '
            <form action="adminlogin.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>';
        }
        ?>
    </div>
	
	<!-- admin page navigations begins here -->
	<div class="admin-nav">
		<a href="../index.php" class="contact-icon home">
		<i class="fas fa-home"></i>
		</a>
		<div class="user-icon">
		<a href="addmembers.php">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class="contact-icon"/></svg>
		</a>
        </div>
	</div>
	<h1>ANNOUNCEMENTS REQUESTED</h1>
<div class="container">

<!-- begin of div with table containing announcement grabbed from the database on sender's table --> 
	<?php
	require('admintodatabase.php');
	?>
	
	<!-- TABLE CONSTRUCTION-->
	<table class="maintable" id="maintable">
		<tr>
			<th>Sender name</th>
			<th>date (year/month/day)</th>
			<th>organization</th>
			<th>announcement</th>
			
		</tr>
			
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['sender_name'];?></td>
				<td><?php echo $rows['date'];?></td>
				<td><?php echo $rows['organization'];?></td>
				<td><?php echo $rows['announcement'];?></td>
				
				
			</tr>
		
			<?php
			
				}
			?>
	</table>
		
			<!-- end of div with sender announcement -->
			<!-- beggining of a div of admin keying in his announcements -->
	<form class="form" action="adminshare.php">

		<h1>Admin Keys Announcements</h1>
		<label for="Sname"><b>Your Name</b></label>
		<input type="text" placeholder="Enter your full name" name="Sname" required>
		<label for="date"><b>Date</b></label>
		<input type="date" placeholder="month/day/year" name="date" required>
		<label for="org"><b>Organization</b></label>
		<input type="text" placeholder="Name of the organization i.e. Nkumari catholic " name="org" >
		<label for="announcement"><b>Announcement To Send</b></label>
		<textarea name="announcement" id="" cols="30" rows="10" placeholder="Type Your Announcement"></textarea>
		<button type="submit"><b>Send</b></button>

	</form>
</div>
	

	
</body>

</html>
				