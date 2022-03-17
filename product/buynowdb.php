<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$a = $_SESSION["ID"];
$date1 = date('d-m-Y');
$date2 = date('d-m-Y', strtotime($date1. ' + 11 days'));;
$status = "NOT DISPATCHED";
$limit = 1;
$pid = 0;
$amount = $_SESSION["i7"];
$bi = $_SESSION["i1"];
$bn = $_SESSION["i2"];
$sql1 = "INSERT INTO purchase (C_ID, P_DATE, D_DATE, AMOUNT) VALUES ('$a', '$date1', '$date2', '$amount')";
$sql2 = "SELECT P_ID FROM purchase WHERE C_ID = '$a' ORDER BY P_ID DESC LIMIT $limit ";
$res1 = mysqli_query($conn, $sql1);
$res2 = mysqli_query($conn, $sql2);
while($row1 = mysqli_fetch_array($res2))
{
     $pid1 = $row1['P_ID'];	
     $sql4 = "INSERT INTO orders (P_ID, ID, NAME, STAT) VALUES ('$pid1', '$bi','$bn','$status' )";
     $res4 = mysqli_query($conn, $sql4);
     $_SESSION['$pid'] = $pid1;

     
} 
     echo "<script type='text/javascript'>;
            window.location='buynowbill.php';
           </script>";  
?> 