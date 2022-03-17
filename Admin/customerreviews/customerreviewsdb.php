<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$rid = $_GET['rid'];
$status = 'APPROVED';
$sqlupdate = "UPDATE reviews SET STATUS = '$status' WHERE R_ID = '$rid'";
$resupdate = mysqli_query($conn, $sqlupdate);
$sql = "SELECT DISTINCT B_ID FROM reviews  WHERE STATUS = '$status' ";
   $res = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($res))
   {
     $bookid = $row['B_ID'];
     echo $bookid;
     $sql2 = "SELECT AVG(RATE) AS AR FROM reviews WHERE B_ID = '$bookid'";
     $res2 = mysqli_query($conn, $sql2);
     while($row2 = mysqli_fetch_array($res2))
     {
          $avg = $row2['AR'];
          $sql3 = "SELECT * FROM books WHERE B_ID = '$bookid' ";       
          $res3 = mysqli_query($conn, $sql3);
          while($row3 = mysqli_fetch_array($res3))
          {

            $frate = $avg;
            $sql4 = "UPDATE books SET B_RATING = '$frate' WHERE B_ID = '$bookid'";
            $res4 = mysqli_query($conn, $sql4);
          }
     }
   }

  echo "<script type='text/javascript'>;
            window.location='customerreviews.php';
           </script>";
?>