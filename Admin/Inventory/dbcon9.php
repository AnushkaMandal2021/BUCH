<?php
   // database connection
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

   // variable declaration and getting values from the front end
   $name = $_GET['bookname'];
   $price = $_GET['price'];
   $rating = $_GET['rating'];
   $author = $_GET['author'];
   $genre = $_GET['genre'];
   $pub = $_GET['publisher'];
   $pubyr = $_GET['publicationyear'];
   $des = $_GET['message'];


   
   // Checking if the text fields are all filled
   if ((empty($name) || trim($name) == '') || (empty($price) || trim($price) == '') || (empty($rating) || trim($rating) == '') || (empty($author) || trim($author) == '') || (empty($genre) || trim($genre) == '') || (empty($pub) || trim($pub) == '') || (empty($pubyr) || trim($pubyr) == '') || (empty($des) || trim($des) == ''))
      {
          echo "<script type='text/javascript'>alert('FILL ALL THE TEXTFIELDS');
             window.location='addbook.php';
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
             echo "<script type='text/javascript'>alert('BOOK ALREADY EXISTS');
             window.location='addbook.php';
             </script>";
          }

        // Inserting data in the database
        else
          {  
            $sql2 = "INSERT INTO books (B_NAME, B_RATING, B_AUTHOR, B_GENRE, B_PUBLISHER, B_PUBLISHDATE, B_PRICE, B_DESCRIPTION) VALUES('$name', '$rating', '$author', '$genre', '$pub', '$pubyr', '$price', '$des') ";
            $res2 = mysqli_query($conn, $sql2);
            echo "<script type='text/javascript'>alert('BOOK ADDED SUCCESSFULLY');
            window.location='addbook.php';
            </script>";    
          }
      }        
?>