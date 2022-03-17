<?php
   include("E:\Gradprojct\htdocs\buch\header.php");
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
       $x=$_POST['firstname'];
       $y=$_POST['lastname'];
       $z=$_POST['email'];
       $b=$_POST['password'];
$sql1 = "SELECT * FROM admin WHERE A_EMAIL = '$z'";
 $res1 = mysqli_query($conn, $sql1);
 $chck1 = mysqli_num_rows($res1);
 if ($chck1>=1) 
  {   
     echo "<script type='text/javascript'>alert('Account Already Exists');
            window.location='http://localhost/buch/Admin/login/login.php';
           </script>";
  }
  else
  {
    $sql2 = "INSERT INTO admin (A_FNAME, A_LNAME, A_EMAIL, A_PWD) VALUES ('$x', '$y', '$z', '$b')";
     $res2 = mysqli_query($conn, $sql2);
     echo "<script type='text/javascript'>alert('Account Created Successfully');
            window.location='http://localhost/buch/Admin/login/login.php';
           </script>";

  } 
   ?>
     