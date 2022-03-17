<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$pid1 = $_GET['pid'];
$id1 = $_GET['id'];
$bid1 = $_GET['bid']; 
$status = 'DISPATCHED';
$sql = "UPDATE orders SET STAT = '$status' WHERE P_ID = '$pid1' AND O_ID = '$id1 ' AND ID = '$bid1'";
$res = mysqli_query($conn, $sql);
  echo "<script type='text/javascript'>;
            window.location='confirmorders.php';
           </script>";
?>