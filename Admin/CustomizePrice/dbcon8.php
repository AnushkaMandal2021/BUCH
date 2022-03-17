<?php
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $pubyr = $_POST['pubyr'];
  $d = $_POST['discount'];
  if($pubyr == '' || $d == '')
    { 
       if($pubyr == '' )
         {
            echo "<script type='text/javascript'>alert('Book Name Cannot be Empty');
            window.location='customizebypublicationyear.php';
           </script>";
         }
       else
    {
       echo "<script type='text/javascript'>alert('Percentage Cannot be Empty');
            window.location='customizebypublicationyear.php';
           </script>";
    }  
  }
  $a = 100 ;
  $discount = $d / $a;
  $sql1 = "SELECT * FROM books WHERE B_PUBLISHDATE = '$pubyr'";
  $sql2 = "UPDATE books SET B_PRICE = B_PRICE+('$discount'*B_PRICE) WHERE B_PUBLISHDATE = '$pubyr'";

  $res = mysqli_query($conn, $sql1);
  $chck = mysqli_num_rows($res);


  if ($chck>=1) 
   { 
     $res = mysqli_query($conn, $sql2);

     echo "<script type='text/javascript'>alert('Customization Successful');
            window.location='customizebypublicationyear.php';
           </script>";
     
   }
  else
    {
      
      echo "<script type='text/javascript'>alert('Book Does Not Exist');
            window.location='customizebypublicationyear.php';
           </script>";
     

    }
    
?>