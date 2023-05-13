<?php
//creating connection
$conn = mysqli_connect("localhost", "root", "", "myprojo");
//check connection
if($conn===false){
    die("ERROR: could not connect . " . mysqli_connect_error());
}else{
    //setting the submit if is clicked
//after it is clicked then do these

if (isset($_POST['submit_events']))
{
    $jumuiya=$_REQUEST['jumuiya'];
    $prayers_date=$_REQUEST['prayers_date'];
    $place=addslashes($_REQUEST["prayers_place"]);//adding slashes helps to store a special character to the database from input

    if($jumuiya==="joseph"){
        $sql="INSERT INTO josephevents VALUES ('id', '$jumuiya', '$prayers_date', '$place')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data updated successifully </h3>";
            echo nl2br("\n$jumuiya \n" . "$prayers_date\n" . "$place");
        }else{
            echo "error: Failed to insert: " . mysqli_error($conn);
        }
    }elseif ($jumuiya==="luke"){
        $sql="INSERT INTO lukeevents VALUES ('id', '$jumuiya', '$prayers_date', '$place')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> updated successifully </h3>";
            echo nl2br("\n$jumuiya \n" . "$prayers_date\n" . "$place");
        }else{
            echo "error: Failed to insert: " . mysqli_error($conn);
        }
    }elseif ($jumuiya==="ann"){
        $sql= "INSERT INTO annevents VALUES ('id', '$jumuiya', '$prayers_date', '$place')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data updated successifully </h3>";
            echo nl2br("\n$jumuiya \n" . "$prayers_date\n" . "$place");
        }else{
            echo "error: Failed to insert: " . mysqli_error($conn);
        }
    }elseif ($jumuiya==="michael"){
        $sql="INSERT INTO michaelevents VALUES ('id', '$jumuiya', '$prayers_date', '$place')";
        if(mysqli_query($conn, $sql)){
            echo"<h3> data updated successifully </h3>";
            echo nl2br("\n$jumuiya \n" . "$prayers_date\n" . "$place");
        }else{
            echo "error: Failed to insert: " . mysqli_error($conn);
        }
    }
    //close connection
    mysqli_close($conn);
}
}
?>




<!-- This is a page where weekly events of a jumuiya will be set. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jumuiya events form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .jumuiyaevents{
            border: 2px ;
            width: 965px;
            background-color: gray;
            margin-left: 15%;
            text-align: center;
        }
        button, input[type=text], input[type=date]{
            width: 98%;
        }
        button{
            background-color:green;
        }
    </style>
</head>
<body>
    <div class="jumuiyaevents">
    <form action="#" method="POST">
        <label for="jumuiya">Jumuiya</label>
        <input type="text" name="jumuiya" placeholder="name of jumuiya without 'st.'" required>
        <label for="prayers_date">Prayers Date</label>
        <input type="date" name="prayers_date" placeholder="enter date of prayers" required>
        <label for="prayers_place">Place</label>
        <input type="text" name="prayers_place" placeholder="where will they be held" required>
        <button type="submit" name="submit_events">SUBMIT</button>
    </form>

    </div>
    
</body>
</html>