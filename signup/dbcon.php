<?php
   include("E:\Gradprojct\htdocs\buch\header.php");
   include_once("connect.php");
  $x=$_GET['firstname'];
  $y=$_GET['lastname'];
  $z=$_GET['email'];
  $a=$_GET['mobile'];
  $b=$_GET['password'];
  $p = 1;

  
   $res = mysqli_query($conn,  "INSERT INTO customer (C_FNAME, C_LNAME, EMAIL, MOB, PWD, PP) VALUES ('$x', '$y', '$z', '$a', '$b', '$p');");
   if (!$res) {
    header("Location: http://localhost/buch/signup/AccountExist.php");
    
   }
   else {

    header("Location: http://localhost/buch/signup/Accountcreatedsuccessfully.php");
    
   }
   
   ?>