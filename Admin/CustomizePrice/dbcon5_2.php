<?php
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $author = $_POST['author'];
  $d = $_POST['discount'];
  if($author == '' || $d == '')
  { 
    if($author == '' )
    {
       echo "<script type='text/javascript'>alert('Author Name Cannot be Empty');
            window.location='customizebyauthor.php';
           </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Percentage Cannot be Empty');
            window.location='customizebyauthor.php';
           </script>";
    }  
  }
  $a = 100 ;
  $discount = $d / $a;
  $sql1 = "SELECT * FROM books WHERE B_AUTHOR = '$author'";
  $sql2 = "UPDATE books SET B_PRICE = B_PRICE-('$discount'*B_PRICE) WHERE B_AUTHOR = '$author'";

  $res = mysqli_query($conn, $sql1);
  $chck = mysqli_num_rows($res);


  if ($chck>=1) 
   { 
     $res = mysqli_query($conn, $sql2);

     echo "<script type='text/javascript'>alert('Customization Successful');
            window.location='customizebyauthor.php';
           </script>";
     
   }
  else 
    {
      
      echo "<script type='text/javascript'>alert('Book Does Not Exist');
            window.location='customizebyauthor.php';
           </script>";
     

    }
    
?>