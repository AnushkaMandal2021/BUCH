 <?php
   include_once("E:\Gradprojct\htdocs\buch\header.php");
    include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $_SESSION["aemail"] = $email;
  $sql = "SELECT * FROM admin WHERE A_EMAIL = '$email' AND A_PWD = '$pwd'";

   $res = mysqli_query($conn, $sql);
   $chck = mysqli_num_rows($res);


   if ($chck>0) 
   { 
     while($row = mysqli_fetch_assoc($res))
     {
      $_SESSION["AID"] = $row['AD_ID'];
      $_SESSION["AName1"] = $row['A_FNAME'];
      $_SESSION["AName2"] = $row['A_LNAME'];

     }
     include("Adminaccount.php") ;
   }
   else
    {
      
      echo "<script type='text/javascript'>alert('Account Not Exist');
            window.location='http://localhost/buch/Admin/login/login.php';
           </script>";
    }
   ?>