<?php
if (isset($_POST['send_values']))
{
    $conn = mysqli_connect("localhost", "root", "", "myprojo");
     // loop through the post array
     foreach ($_POST as $key => $value) {
         # check if the value is 'on' (the checkox is checked)
         if ($value=='on'){
             //retrieve the rest of the data for this row using the checkbox name
             $Sname=$_POST['Sname-'. $key];
             $date=$_POST['date-'. $key];
             $org=$_POST['org-'. $key];
             $announcement=$_POST['announcement-'. $key];
            
             //insert the data into the database
             $sql= " INSERT INTO toannouncement (Sname, date, org, announcement) VALUES('$Sname', '$date', '$org', '$announcement')";
             mysqli_query($conn, $sql);
         }
     }
     // close connection
     mysqli_close($conn);

}
?>