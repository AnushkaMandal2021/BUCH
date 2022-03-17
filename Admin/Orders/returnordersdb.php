<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$id = $_GET['id'];
$bid1 = $_GET['bid']; 
$status = 'REFUND INITIATED';
$sql = "UPDATE orders SET STAT = '$status' WHERE O_ID = '$id ' AND ID = '$bid1'";
$res = mysqli_query($conn, $sql);
  echo "<script type='text/javascript'>;
            window.location='returnorders.php';
           </script>";
?>