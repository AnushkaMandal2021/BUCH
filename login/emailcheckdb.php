<?php
   include("E:\Gradprojct\htdocs\buch\header.php");
   include_once("connect.php");
   if(isset($_POST["email"]) && (!empty($_POST["email"])))
    {
            $email = $_POST["email"];
            $sel_query = "SELECT * FROM customer WHERE EMAIL ='$email'";
            $results = mysqli_query($conn,$sel_query);
            $row = mysqli_num_rows($results);
            if ($row<1)
             {
              echo "<script type='text/javascript'>alert('No User is registered to this email');
              window.location='javascript:history.go(-1)';
              </script>";
             }
            else
             {
              while($row = mysqli_fetch_assoc($results))
              $_SESSION['frgtpwd'] = $row['EMAIL'];
            echo "<script type='text/javascript'>
            window.location='forgetpwd.php';
            </script>";
              }
   }
   else {

echo "<script type='text/javascript'>alert('Enter a valid email');
              window.location='javascript:history.go(-1)';
              </script>";

   }
   ?>