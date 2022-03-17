<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$a = $_SESSION["ID"];
$pid = $_SESSION['pid'];
$bid1 = $_SESSION['$bid1']; 
   $sql2 = "SELECT * FROM reviews WHERE B_ID = '$bid1' AND C_ID = '$a'";
   $res_data2 = mysqli_query($conn,$sql2);
   $check = mysqli_num_rows($res_data2);
   if ($check>0) {
    while($row = mysqli_fetch_assoc($res_data2))
    {
     $id = $row['R_ID'];
     echo "<script type='text/javascript'>alert('You Have Already Reviewed this Product');
            window.location='viewreview.php?id=$id';
           </script>";

    }
   
   	
   }
   else
   {

$result = $_GET['rating'];
$head = $_GET['head'];
$body = $_GET['body'];
$status = "WAITING FOR APPROVAL";
   $sql1 = "INSERT INTO reviews (C_ID ,B_ID ,P_ID , RATE, HEAD, BODY, STATUS) VALUES ('$a', '$bid1', '$pid', '$result', '$head', '$body', '$status')";
 $res_data1 = mysqli_query($conn,$sql1); 
      echo "<script type='text/javascript'>alert('SUCCESS!')
            window.location='http://localhost/buch/cart/purchasehistory.php';
           </script>";


   } 
  


?>