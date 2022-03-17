<?php
 include_once("E:\Gradprojct\htdocs\buch\header.php");
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
         $rid = $_GET['id'];
             $sql1 = "DELETE FROM reviews WHERE R_ID = '$rid'";
             $res1 = mysqli_query($conn, $sql1);
              echo "<script type='text/javascript'>
                         window.location='javascript:history.go(-1)';
                         </script>";
                  ?>  