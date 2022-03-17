<?php
 include_once("E:\Gradprojct\htdocs\buch\header.php");
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

         $bid = $_GET['id'];
         $cid = $_SESSION["ID"];

             $sql1 = "DELETE FROM cart WHERE C_ID = '$cid' && B_ID = '$bid'";
             $res1 = mysqli_query($conn, $sql1);
                         echo "<script type='text/javascript'>
                         window.location='javascript:history.go(-1)';
                         </script>";
          
                  ?>  