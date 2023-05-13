
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="o7Dffj6pcMA9AL5e0T5kRbJxKXzhkz7E6ouMmIzMJ4Q" />
    <title>Church Announcement Deliverance System</title>
    <!-- <h2>St Dominic Nkumari Catholic church</h2> -->
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./public/css/all.min.css">
    <style>
        body{
            background-image: url(./images/church_3.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            max-width: 100%;
            min-width: 100%;
            
        }
        
    </style>
</head>
<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">WELCOME</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
    <!-- USING CHECKBOX HACK -->
    <input type="checkbox" id="checkbox_toggle" />
    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
    <!-- NAVIGATION MENUS -->
    <div class="menu">
        <li><i class="fas fa-home"></i></li></mark>
        <li class="services">
        <a href="#">Users</a>
        <!-- DROPDOWN MENU -->
        <ul class="dropdown">
            <!-- <li><a href="./adminlogin.php">Admin</a></li> -->
            <li><a href="./sender.php">Sender</a></li>
        </ul>
        </li>
        <li class="services">
        <a href="#">Jumuiyas</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
            <li><a href="./public/stjoseph.php">St.Joseph</a></li>
            <li><a href="./public/stluke.php">St.Luke</a></li>
            <li><a href="./public/stann.php">St.Ann</a></li>
            <li><a href="./public/stmichael.php">St.Michael</a></li>
        </ul>
        </li>
        <li class="services">
            <a href="#">Groups</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
            <li><a href="./public/Cmagroup.php">CMA</a></li>
            <li><a href="./public/Cwagroup.php">CWA</a></li>
            <li><a href="./public/Choirgroup.php">CHOIR</a></li>
            <li><a href="./public/Ygroup.php">YOUTHS</a></li>
            <li><a href="./public/Pmcgroup.php">PMC</a></li>
        </ul>
        </li>
        <li><a href="./public/aboutus.php">About Us</a></li>
        <li><a href="./public/activities.php">Activities</a></li>
        <li><a href="./public/contact.php">Contact Us</a></li>
        <li><a href="admin/databasetoannouncement.php">Announcements</a></li>
        
        
    </div>
    </ul>
    </nav>
    <!-- background text-->
    <div class="bg">
        <h2>CHURCH ANNOUNCEMENT DELIVERANCE SYSTEM</h2>
        <h3>Worship With Us</h3>
        
    </div>
   
    
</body>
</html>
<?php
    include ("./includes/footer.php");
    ?>