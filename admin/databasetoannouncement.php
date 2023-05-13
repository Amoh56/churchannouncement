<?php
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
$sql = "SELECT * FROM toannouncement ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!--HTML code to display data in tabular format-->
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Announcements</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px;
			padding: 0;
		}

		h1 {
			text-align: center;
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
		.secondtable {
		border-collapse: collapse;
		}

		.secondtable th,
		.secondtable td {
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
		#myTable tr:nth-child(2n+1) {
  			background-color: #e0e0e0; /* Set background color for alternate rows */
		}
	</style>

</head>

<body>
	<section>
		<h1>ANNOUNCEMENTS MADE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table class="secondtable" id='myTable'>
			<tr>
				<th>Sender name</th>
				<th>date(year-month-day)</th>
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
	</section>
</body>

</html>
