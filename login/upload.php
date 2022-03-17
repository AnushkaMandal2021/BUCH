<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include("E:\Gradprojct\htdocs\buch\login\connect.php");
$id = $_SESSION["ID"];
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
       if ($fileError === 0) {
           	if ($fileSize < 1000000) {
           		$fileNewName = "user".$id.".".$fileActualExt;
                   $fileDestination = 'uploads/'.$fileNewName;
                   move_uploaded_file($fileTmpName, $fileDestination);
                   $sql = "UPDATE customer SET PP = 0 WHERE C_ID = '$id' ";
                   $result = mysqli_query($conn, $sql);
                   $_SESSION["Pic"] = 0;
                   echo "<script type='text/javascript'>alert('SUCCESS!');
            window.location='account.php?random=".uniqid()."';
           </script>";  
           	}else {
           		    echo "<script type='text/javascript'>alert('Your file is too big!');
            window.location='javascript:history.go(-1)';
           </script>";  
           	}


           }  else {
           	    echo "<script type='text/javascript'>alert('There is an error uploading in your file!');
            window.location='javascript:history.go(-1)';
           </script>";  
           }  


    }else{
    	    echo "<script type='text/javascript'>alert('You cannot upload files of this type');
            window.location='javascript:history.go(-1)';
           </script>";  

    }
}