<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send your announcement to Secretary</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .sender{
            display: flex;
            justify-content: center;
            

        }
        .sender1 {
            width: 50%; /* Adjust the width as needed */
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%)

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
        </style>
</head>
<body>
    <div class="sender">
        <form action="insert.php" method="POST">
            <div class="sender1">
                <label for="Sname"><b>Your Name</b></label>
                <input type="text" placeholder="Enter your full name" name="Sname" required>
                <label for="date"><b>Date</b></label>
                <input type="date" placeholder="month/day/year" name="date" required>
                <label for="org"><b>Organization</b></label>
                <input type="text" placeholder="Name of the organization i.e. Nkumari catholic " name="org" >
                <label for="announcement"><b>Announcement To Send</b></label>
                <textarea name="announcement" id="" cols="30" rows="10" placeholder="Type Your Announcement"></textarea>
                <button type="submit"><b>Send</b></button>

            </div>
    </form>
    

    </div>
    
</body>
</html>