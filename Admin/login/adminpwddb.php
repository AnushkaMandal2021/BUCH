<?php
   include("E:\Gradprojct\htdocs\buch\header.php");
   include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
   $email = $_SESSION['afrgtpwd'];
            $password=$_POST['password'];
            $rpassword=$_POST['password2'];
            if ($password == $rpassword ) 
              {
              	if (!empty($_POST['password']) && !empty($_POST['password2']))
              	{
            $sql = "UPDATE admin SET A_PWD = '$password' WHERE A_EMAIL = '$email' "; 
            $res = mysqli_query($conn,$sql);
             echo "<script type='text/javascript'>alert('Password changed successfully!');
              window.location='login.php';
              </script>";
          }
          else{ 

           echo "<script type='text/javascript'>alert('Password cannot be empty');
            window.location='javascript:history.go(-1)';
            </script>";

              }
          }
           else 
             {
              echo "<script type='text/javascript'>alert('Password does not match');
            window.location='javascript:history.go(-1)';
            </script>";
             }
   ?>