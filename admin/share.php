<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin to Announcement</title>
    <style>
        /*borderd form*/
        form {
            border: 3px #f1f1f1;
        }
        body{
            background-color: rgb(1, 139, 139);
        }
        /* centering sender form */
        .sender{
            max-width: 960px;
            margin-left: 15%;
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
        /* set a style for all buttons*/
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            width: 100%;
        }
        /* add a hover effect for buttons */
        button:hover{
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <form action="adminshare.php" method="POST">
        <div class="sender">
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
    
</body>
</html>