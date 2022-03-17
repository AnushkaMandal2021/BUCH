 <?php
   include_once("E:\Gradprojct\htdocs\buch\header.php");
   include_once("connect.php");
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $_SESSION["id1"] = $email;
  $_SESSION["id2"] = $pwd;
  $sql = "SELECT * FROM customer WHERE EMAIL = '$email' AND PWD = '$pwd'";


   $res = mysqli_query($conn, $sql);
   $chck = mysqli_num_rows($res);


   if ($chck>0) 
   { 
     while($row = mysqli_fetch_assoc($res))
     {
      $_SESSION["ID"] = $row['C_ID'];
      $_SESSION["Name1"] = $row['C_FNAME'];
      $_SESSION["Name2"] = $row['C_LNAME'];
      $_SESSION["Phone"] = $row['MOB'];
      $_SESSION["Pic"] = $row['PP'];
      $a = $_SESSION["ID"];
           
             $sql1 = "SELECT * FROM address WHERE C_ID = '$a'";
         
              $res_data1 = mysqli_query($conn,$sql1);
              $check = mysqli_num_rows($res_data1);
              if($check == 0)
              {
                  $_SESSION["HNO"] = "";
                  $_SESSION["STNO"] = "";
                  $_SESSION["CT"] = "";
                  $_SESSION["ST"] = "";
                  $_SESSION["PC"] = "";

              }
              else {
              while($row = mysqli_fetch_array($res_data1))
                         {
                               $_SESSION["HNO"] = $row["H_NO"];
                               $_SESSION["STNO"] = $row["ST_NO"];
                               $_SESSION["CT"] = $row["CITY"];
                               $_SESSION["ST"] = $row["STATE"];
                               $_SESSION["PC"] = $row["PINCODE"];

                         }
                    }     

     }
     include("account.php") ;
   }
   else
    {
      
      header("Location: http://localhost/buch/login/noAccount.php");
    }
   ?>