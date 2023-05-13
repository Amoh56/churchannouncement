<?php 

if (isset($_POST['submit'])) {
    // we first need to get the information before the file is uploaded
    $file=$_FILES['file'];
    // we now need to extract the details of that file e.g. name, size, type
    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];
    //now we want to set attributes of types to upload
    $fileExt=explode('.', $fileName);
    $fileActualExt= strtolower(end($fileExt));

    $allowed=array('jpg', 'jpeg', 'png','gif','mpeg','mp4');
    //an if statement to check whether the file is allowed
    if (in_array($fileActualExt, $allowed)){
        if ($fileError===0){
            $fileNewName=uniqid('',true). "." . $fileActualExt;
            $fileDestination= 'uploads/'.$fileNewName;
            move_uploaded_file($fileTmpName,$fileDestination);
            header("location: index.php?Upload success");


        }else{
            echo "There was an error uploading the file!";
        }
    }else{
        echo "This file type is not allowed to be uploaded!";
    }
}
?>