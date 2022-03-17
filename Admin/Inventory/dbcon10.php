<?php
   // database connection
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

   // variable declaration and getting values from the front end
   $name = $_POST['name'];
   
   // Checking if the text fields are all filled
   if (empty($name) || trim($name) == '')
      {
          echo "<script type='text/javascript'>alert('FILL THE TEXT FIELD');
             window.location='removebook.php';
             </script>";
      }
      
   // checking if the data exists or not in the database
   else
      { 

        $sql1 = "SELECT * FROM books WHERE B_NAME = '$name'";
        $res1 = mysqli_query($conn, $sql1);
        $chck1 = mysqli_num_rows($res1);
        if ($chck1 == 0)
         {
           echo "<script type='text/javascript'>alert('BOOK DOES NOT EXIST');
            window.location='removebook.php';
            </script>";  
         }

        //Deleting data from the database
        else
         {
           $sql2 = "DELETE FROM books WHERE B_NAME = '$name'";
           $res2 = mysqli_query($conn, $sql1);
           $sql3 = "SELECT * FROM books WHERE B_NAME = '$name'";
           $res3 = mysqli_query($conn, $sql3);
           $chck2 = mysqli_num_rows($res3);  

        if ($chck2 <= 0)
          {
             echo "<script type='text/javascript'>alert('BOOK DELETED SUCCESFULLY');
             window.location='removebook.php';
             </script>";
          }
         } 
      }         
?>