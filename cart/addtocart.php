<?php
 include_once("E:\Gradprojct\htdocs\buch\header.php");
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

         $bid = $_GET['id'];
         $cid = $_SESSION["ID"];
             $sql1 = "SELECT * FROM books WHERE B_ID = '$bid'";
             $res1 = mysqli_query($conn, $sql1);
             $chck1 = mysqli_num_rows($res1);
             if ($chck1>0) 
               { 
                 while($row = mysqli_fetch_assoc($res1))
                  {
           
                      $bname = $row["B_NAME"];
                      $bprice = $row["B_PRICE"];
                       $res2 = mysqli_query($conn,  "INSERT INTO cart (C_ID, B_ID, BN, BP) VALUES ('$cid', '$bid', '$bname', '$bprice');");
                         echo "<script type='text/javascript'>alert('Added to cart successfully');
                         window.location='javascript:history.go(-1)';
                         </script>";
                     }
                
                     
                   }
                  ?>  