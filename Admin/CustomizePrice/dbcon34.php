<?php
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
   $name = $_POST['name'];
   $d = $_POST['discount'];
   if($name == '' || $d == '')
    { 
       if($name == '' )
         {
            echo "<script type='text/javascript'>alert('Book Name Cannot be Empty');
            window.location='customizebyname.php';
           </script>";
         }
       else
    {
       echo "<script type='text/javascript'>alert('Percentage Cannot be Empty');
            window.location='customizebyname.php';
           </script>";
    }  
  }
  $a = 100 ;
  $discount = $d / $a;
  $sql1 = "SELECT * FROM books WHERE B_NAME = '$name'";
  $sql2 = "UPDATE books SET B_PRICE = B_PRICE+('$discount'*B_PRICE) WHERE B_NAME = '$name'";

  $res = mysqli_query($conn, $sql1);
  $chck = mysqli_num_rows($res);


  if ($chck>=1) 
   { 
     $res = mysqli_query($conn, $sql2);

     echo "<script type='text/javascript'>alert('Customization Successful');
            window.location='customizebyname.php';
           </script>";
     
   }
  else
    {
      
      echo "<script type='text/javascript'>alert('Book Does Not Exist');
            window.location='customizebyname.php';
           </script>";
     

    }
    
?>