<?php
   // database connection
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

   // variable declaration and getting values from the front end
   $name = $_POST['bookname'];
   $genre = $_POST['genre'];
   
   // Checking if the text fields are all filled
   if ( (empty($name) || trim($name) == '') || (empty($genre) || trim($genre) == '') )
     {
          echo "<script type='text/javascript'>alert('FILL ALL THE FIELDS');
             window.location='genre.php';
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
        
            $sql2 = "UPDATE books SET B_GENRE= '$genre' WHERE B_NAME  = '$name'";
            $res2 = mysqli_query($conn, $sql2);
            echo "<script type='text/javascript'>alert('GENRE UPDATED SUCCESSFULLY');
            window.location='genre.php';
            </script>";    
          }

        else
        {
          echo "<script type='text/javascript'>alert('BOOK NOT FOUND');
          window.location='genre.php';
             </script>";
        }
      }        
?>