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
                    $sql3 = "SELECT * FROM wishlist WHERE B_ID = '$bid' && C_ID = '$cid'";
             $res3 = mysqli_query($conn, $sql3);
             $chck3 = mysqli_num_rows($res3);
             if ($chck3>0) 
               { 
                  echo "<script type='text/javascript'>alert('Already in the wishlist');
                         window.location='javascript:history.go(-1)';
                         </script>";

                }
                else{

                      $bname = $row["B_NAME"];
                      $bprice = $row["B_PRICE"];
                       $res2 = mysqli_query($conn,  "INSERT INTO wishlist (C_ID, B_ID, BNAME, BPRICE) VALUES ('$cid', '$bid', '$bname', '$bprice');");
                         echo "<script type='text/javascript'>alert('Added to Wish List successfully');
                         window.location='javascript:history.go(-1)';
                         </script>";
                     }
                }
                     
                   }
                  ?>  