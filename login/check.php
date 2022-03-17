 <?php
  include_once("E:\Gradprojct\htdocs\buch\header.php");
  include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $a = $_SESSION["ID"];
  $sql = "SELECT * FROM customer WHERE EMAIL = '$email' OR MOB = '$mob' AND C_ID != '$a'";
  $res = mysqli_query($conn, $sql);
  $chck = mysqli_num_rows($res);
  $sqlcheck = "SELECT * FROM address WHERE C_ID = '$a'";
  $rescheck = mysqli_query($conn, $sqlcheck);
  $chckcheck = mysqli_num_rows($rescheck);
  if ($chckcheck<0) 
  {

    echo "<script type='text/javascript'>alert('Add Delivery Address First!');
             window.location='http://localhost/buch/cart/address.php';
             </script>";
    
  }
  else{
    echo "<script type='text/javascript'>;
             window.location='http://localhost/buch/login/editdetails.php';
             </script>";
  }

   ?>