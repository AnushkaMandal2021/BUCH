<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$a = $_SESSION["ID"];
$pid = $_GET['id'];
$bid1 = $_GET['bid']; 
$status = 'RETURN INITIATED';
$sql = "UPDATE orders SET STAT = '$status' WHERE P_ID = '$pid ' AND ID = '$bid1'";
$res = mysqli_query($conn, $sql);
    echo "<script type='text/javascript'>;
            window.location='javascript:history.go(-1)';
           </script>";
?>