<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $x=$_GET['house'].",";
  $y=$_GET['area'].",";
  $z=$_GET['city'].",";
  $a=$_GET['state'].",";
  $b=$_GET['pincode'].",";
  $c = $_SESSION["ID"];
  
  
  $sql1 ="INSERT INTO address (C_ID, H_NO, ST_NO, CITY, STATE, PINCODE) VALUES ('$c', '$x', '$y', '$z', '$a', '$b')";
   $res1 = mysqli_query($conn, $sql1);
   if ($res1) 
   {    
           $_SESSION["HNO"] = $x;
           $_SESSION["STNO"] = $y;
           $_SESSION["CT"] = $z;
           $_SESSION["ST"] = $a;
           $_SESSION["PC"] = $b;


    echo "<script type='text/javascript'>alert('Delivery Address added successfully');
            window.location='javascript:history.go(-2)';
           </script>";
 }
   ?>