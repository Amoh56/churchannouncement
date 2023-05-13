
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adding members</title>
    <style>
        .addmemberstitle {
            text-align: center;
        }

        .addmemberstitle h3 {
            font-weight: bold;
            color: green;
        }
        .nav-box {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }
        a {
            display: inline-block;
            margin: 0 10px;
            font-size: 24px;
            text-decoration: none;
            color: white;
            background-color: green;
        }
        a:hover{
            opacity: 0.8;
            color: white;

        }
        .adding-members {
            max-width: 965px;
            margin-left: 15%;
            margin-top: 0;
            background-image: url(../images/church_3.jpeg);
        }

        /* full width inputs */
        input[type=text],
        input[type=password],
        button {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        button {
            background-color: green;
        }

        button:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        @media only screen and (max-width:768px) {
        .nav-box {
            display: block;
        }
        
        .nav-box a {
            display: block;
        }
        .adding-members {
            max-width: auto;
            margin-left: 0px;
            margin-top: 0;
            background-image: url(../images/church_2.jpeg);
            display: block;
        }
        h4{
            font-size: 12px;
        }

            /* full width inputs */
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;

            }
            .member-edit-btns{
                width: auto;
                float: right;
                text-decoration: none;
            }
        }
    </style>
</head>

<body>
<div class="addmemberstitle">
    <h3>MANAGE MEMBERS</h3>
</div>
<!-- below is a div containing different navigations -->
<div class="nav-box">
    <a href="../index.php">Home</a>
    <a href="./databasetowebpage.php">Back to Admin</a>
    <a href="../gallery/admin.html">Manage Gallery</a>
    <a href="setjumuiyaevents.php">Manage Jumuiya Prayers</a>

</div>

    <!-- a div to add members to their respective jumuiya -->
    <div class="adding-members">
        <h4>NB: <mark>Use lower case in jumuiya and do not include (st). e.g. joseph not st.joseph</mark></h4>
        <form action="insertmembers.php" method="POST">
            <label for="jumuiya">Jumuiya</label>
            <input type="text" placeholder="Enter jumuiya name" name="jumuiya" required>
            <label for="firstame">First Name</label>
            <input type="text" placeholder="Enter first name" name="firstname" required>
            <label for="middlename">Middle Name</label>
            <input type="text" placeholder="Enter middle name" name="middlename" required>
            <label for="surname">Surname</label>
            <input type="text" placeholder="Enter surname" name="surname">
            <!-- member editing buttons -->
            <div class="member-edit-btns">
                <button type="submit" name="add-members-btn" class="btn btn-primary">ADD</button>
                <button type="submit" name="delete-members-btn" class="btn btn-danger">DELETE</button>

            </div>

        </form>

    </div>

</body>

</html>