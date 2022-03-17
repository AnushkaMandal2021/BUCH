<?php
   include_once("E:\Gradprojct\htdocs\buch\header.php");
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $search = $_GET['search'];
  $_SESSION['search'] = $search;
   if ((empty($search) || trim($search) == ''))
      {
          echo "<script type='text/javascript'>alert('Textfields cannot be empty');
            window.location='javascript:history.go(-1)';
            </script>";
      }
  else 
  {    
  $sql = "SELECT * FROM books WHERE B_NAME = '$search' || B_AUTHOR = '$search' || B_GENRE = '$search' || B_PUBLISHER = '$search'";
  $res = mysqli_query($conn, $sql);
  $chck = mysqli_num_rows($res);



   if ($chck==0)
   { 
    
      echo "<script type='text/javascript'>alert('BOOK NOT EXIST');
            window.location='javascript:history.go(-1)';
           </script>";
   }
   else
    {
            
           include("product.php");
    
     
   
    }
   } 
   ?>