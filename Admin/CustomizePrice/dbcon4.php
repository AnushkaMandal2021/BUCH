<?php
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $genre = $_POST['genre'];
  $d = $_POST['discount'];
  if($genre == '' || $d == '')
    { 
       if($genre == '' )
         {
            echo "<script type='text/javascript'>alert('Book Name Cannot be Empty');
            window.location='customizebygenre.php';
           </script>";
         }
       else
    {
       echo "<script type='text/javascript'>alert('Percentage Cannot be Empty');
            window.location='customizebygenre.php';
           </script>";
    }  
  }
  $a = 100 ;
  $discount = $d / $a;
  $sql1 = "SELECT * FROM books WHERE B_GENRE = '$genre'";
  $sql2 = "UPDATE books SET B_PRICE = B_PRICE+('$discount'*B_PRICE) WHERE B_GENRE = '$genre'";

  $res = mysqli_query($conn, $sql1);
  $chck = mysqli_num_rows($res);


  if ($chck>=1) 
   { 
     $res = mysqli_query($conn, $sql2);

     echo "<script type='text/javascript'>alert('Customization Successful');
            window.location='customizebygenre.php';
           </script>";
     
   }
  else
    {
      
      echo "<script type='text/javascript'>alert('Book Does Not Exist');
            window.location='customizebygenre.php';
           </script>";
     

    }
    
?>