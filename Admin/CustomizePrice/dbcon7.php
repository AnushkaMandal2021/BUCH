<?php
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $pub = $_POST['publisher'];
  $d = $_POST['discount'];
   if($pub == '' || $d == '')
  { 
    if($pub == '' )
    {
       echo "<script type='text/javascript'>alert('Publisher Name Cannot be Empty');
            window.location='customizebypublisher.php';
           </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Discount Cannot be Empty');
            window.location='customizebypublisher.php';
           </script>";
    }  
  }
  $a = 100 ;
  $discount = $d / $a;
  $sql1 = "SELECT * FROM books WHERE B_PUBLISHER = '$pub'";
  $sql2 = "UPDATE books SET B_PRICE = B_PRICE+('$discount'*B_PRICE) WHERE B_PUBLISHER = '$pub'";

  $res = mysqli_query($conn, $sql1);
  $chck = mysqli_num_rows($res);


  if ($chck>=1) 
   { 
     $res = mysqli_query($conn, $sql2);

     echo "<script type='text/javascript'>alert('Customization Successful');
            window.location='customizebypublisher.php';
           </script>";
     
   }
  else
    {
      
      echo "<script type='text/javascript'>alert('Book Does Not Exist');
            window.location='customizebypublisher.php';
           </script>";
     

    }
    
?>