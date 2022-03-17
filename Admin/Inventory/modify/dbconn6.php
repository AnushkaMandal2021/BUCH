<?php
   // database connection
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

   // variable declaration and getting values from the front end
   $name = $_GET['bookname'];
   $pubyr = $_GET['year'];
  
   // Checking if the text fields are all filled
   if ((empty($name) || trim($name) == '') || (empty($pubyr) || trim($pubyr) == ''))
      {
          echo "<script type='text/javascript'>alert('FILL ALL THE FIELDS');
             window.location='publication.php';
             </script>";
      }
      
   // checking if the data exists or not in the database
   else
      {
        $sql1 = "SELECT * FROM books WHERE B_NAME = '$name'";
        $res1 = mysqli_query($conn, $sql1);
        $chck = mysqli_num_rows($res1);

        if ($chck>=1)
          {
            
            $sql2 = "UPDATE books SET B_PUBLISHDATE = '$pubyr' WHERE B_NAME = '$name'";
            $res2 = mysqli_query($conn, $sql2);
            echo "<script type='text/javascript'>alert('PUBLISCATION YEAR UPDATED SUCCESSFULLY');
            window.location='publication.php';
            </script>";    
          }

          else
          {
             echo "<script type='text/javascript'>alert('BOOK NOT FOUND');
             window.location='publication.php';
            </script>"; 
          }
      }        
?>