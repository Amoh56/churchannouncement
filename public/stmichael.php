<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>St Ann Small Christian Community</title>
    <style>
    /* Css to style the table for storing members in phones */
        table {
			margin: 0 auto;
            
		}
		

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
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
		.table1{
			margin: 0 auto;
			
			
		}
		/* styling larger screens */

		@media only screen  and (min-width: 768px){
			table {
			margin: 0 auto;
            margin-left: 15%;
			font-size: large;
            max-width: 965px;
			border: none;
			padding: 0;
            color: black;
		}
		

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
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
		.table1{
			margin: 0 auto;
			font-size: large;
            max-width: 965px;
			border: none;
			padding: 0;
            color: black;
			
		}

		}
    </style>
</head>
<body>
    <div class="groups-a">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="stann.php">St.Ann</a></li>
            <li><a href="stjoseph.php">St.Joseph</a></li>
            <li><a href="stluke.php">St.Luke</a></li>
            <li><a href="prayers.php"><mark>Prayers</mark></a></li>
            <li><a href="../gallery/gallery.html"><mark>Gallery</mark></a></li>
            
        </ul>
    
       </div>
    <h5> MICHAEL MEMBERS</h5>
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
$sql = "SELECT * FROM michaelmembers ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
   
    <section>
		<!-- TABLE CONSTRUCTION-->
		<table >
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
                <th>Surname</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['firstname'];?></td>
				<td><?php echo $rows['middlename'];?></td>
                <td><?php echo $rows['surname'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
    
    <div class="jumuiyas">
    	<h4 style="color: white;">Weekly events In Tabular Format</h4>
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
$sql = "SELECT * FROM michaelevents ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
   
    <section>
		<!-- TABLE CONSTRUCTION-->
		<table class="table1" >
			<tr>
				<!-- <th>Jumuiya</th> -->
				<th>Prayers Date (year/month/day)</th>
                <th>Place</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				
				<td><?php echo $rows['Prayers Date'];?></td>
                <td><?php echo $rows['Place'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
        Our members are adviced to follow up the prayers via this link. <a href="prayers.php">click here</a> 
    </div>
</body>
</html>