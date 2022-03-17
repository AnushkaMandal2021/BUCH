<?php
   // database connection
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

   // variable declaration and getting values from the front end
   $oldname = $_GET['name1'];
   $newname = $_GET['name2'];

   
   
   // Checking if the text fields are all filled
   if ((empty($oldname) || trim($oldname) == '')||(empty($newname)||trim($newname)==''))
      {
          echo "<script type='text/javascript'>alert('FILL ALL THE FIELDS');
             window.location='bookname.php';
             </script>";
      }
      
   // checking if the data exists or not in the database
   else
      {
          $sql1 = "SELECT * FROM books WHERE B_NAME = '$oldname'";
        $res1 = mysqli_query($conn, $sql1);
        $chck = mysqli_num_rows($res1);
        

        if ($chck>0)
          {
               while($row = mysqli_fetch_assoc($res1))
        {
          $id = $row['B_ID'];
          
        // Inserting data in the database
       
     $sql2 = "UPDATE books SET B_NAME = '$newname' WHERE B_ID = '$id'";
           $res2 = mysqli_query($conn, $sql2);
            echo "<script type='text/javascript'>alert('BOOK NAME MODIFIED SUCCESSFULLY');
          window.location='bookname.php';
             </script>";
        }
      }
        else
        {
          echo "<script type='text/javascript'>alert('BOOK NOT FOUND');
          window.location='bookname.php';
             </script>";
        }
      }
      
?>