<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$a = $_SESSION["ID"];
$date1 = date('d-m-Y');
$date2 = date('d-m-Y', strtotime($date1. ' + 11 days'));;
$status = "NOT DISPATCHED";
$total = $_SESSION["tp"];
$limit = 1;
$pid = 0;
$sql1 = "INSERT INTO purchase (C_ID, P_DATE, D_DATE, AMOUNT) VALUES ('$a', '$date1', '$date2', '$total')";
$sql2 = "SELECT P_ID FROM purchase WHERE C_ID = '$a' ORDER BY P_ID DESC LIMIT $limit ";
$sql3 = "SELECT B_ID, BN FROM cart WHERE C_ID = '$a'";
$res1 = mysqli_query($conn, $sql1);
$res2 = mysqli_query($conn, $sql2);
$res3 = mysqli_query($conn, $sql3);
while($row1 = mysqli_fetch_array($res2))
{
     $pid1 = $row1['P_ID'];
     while($row2 = mysqli_fetch_array($res3))
     {
     	$bi = $row2['B_ID'];
     	$hn = $row2["BN"];
        $_SESSION['$pid'] = $pid1;	
        $sql4 = "INSERT INTO orders (P_ID, ID, NAME, STAT) VALUES ('$pid1', '$bi','$hn','$status' )";
        $res4 = mysqli_query($conn, $sql4);
     }
   
     
} 
$sql5 = "DELETE FROM cart WHERE C_ID = '$a'";
$res5 = mysqli_query($conn, $sql5);  
     echo "<script type='text/javascript'>;
            window.location='purchase.php';
           </script>";  
?> 