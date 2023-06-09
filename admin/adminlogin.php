<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login form</title>
</head>
<body>
    <form action="validate.php" method="POST">
    <div class="admin_login">
        <div class="imgcontainer">
                <img src="../admin.jpeg" alt="Login" class="avatar">
            </div>
            <div class="container">
                <label for="uname">
                    <b>Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="password">
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit">Login</button>
                <label for="#"><input type="checkbox" checked="checked" name="remember">Remember me</label>
            </div>
            <div class="container" style="background-color: #f1f1f1;">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="pwd">Forgot <a href="admin/resetpas.php">password?</a></span>
            </div>
    </div>
       
    </form>
    
</body>
</html>