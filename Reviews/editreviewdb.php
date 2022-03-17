<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
$reviewid = $_SESSION['rid'];
$result = $_GET['rating'];
$head = $_GET['head'];
$body = $_GET['body'];
  if(!empty($result) || !trim($result) == '') 
  {   
  $sql = "UPDATE reviews SET RATE = '$result' WHERE R_ID = '$reviewid'";
  $res = mysqli_query($conn, $sql);
  
$sqlupdate = "SELECT DISTINCT B_ID FROM reviews  WHERE STATUS = 'APPROVED' ";
   $resupdate = mysqli_query($conn, $sqlupdate);
   while($rowupdate = mysqli_fetch_array($resupdate))
   {
     $bookid = $rowupdate['B_ID'];
     $sql2 = "SELECT AVG(RATE) AS AR FROM reviews WHERE B_ID = '$bookid' AND STATUS = 'APPROVED' ";
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
  }
 if(!empty($head) || !trim($head) == '') 
  {   
    $sql = "UPDATE reviews SET HEAD = '$head' WHERE R_ID = '$reviewid'";
    $res = mysqli_query($conn, $sql);

  }
 if(!empty($body) || !trim($body) == '') 
  {   

  $sql = "UPDATE reviews SET BODY = '$body' WHERE  R_ID = '$reviewid'";
  $res = mysqli_query($conn, $sql);
  }
     echo "<script type='text/javascript'>alert('SUCCESS!');
            window.location='viewreview.php?id=$reviewid';
           </script>";


?>












