 <?php
   include_once("E:\Gradprojct\htdocs\buch\header.php");
  include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
  $a = $_SESSION["ID"];
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $email = $_GET["email"];
  $mob = $_GET["phone"];
  $hno = $_GET["house"];
  $area = $_GET["area"];
  $city = $_GET["city"];
  $state = $_GET["state"];
  $pin = $_GET["pincode"]; 
  $sql = "SELECT * FROM customer WHERE EMAIL = '$email' OR MOB = '$mob' AND C_ID != '$a'";
  $res = mysqli_query($conn, $sql);
  $chck = mysqli_num_rows($res);
  $sqlcheck = "SELECT * FROM address WHERE C_ID = '$a'";
  $rescheck = mysqli_query($conn, $sqlcheck);
  $chckcheck = mysqli_num_rows($rescheck);
  if ($chckcheck == 0) 
  {

    echo "<script type='text/javascript'>alert('Add Delivery Address First!');
             window.location='http://localhost/buch/cart/address.php';
             </script>";
    
  }
  else{
 if ($chck>0) 
   { 
  while($row = mysqli_fetch_assoc($res))
  {
    if( $email ==  $row["EMAIL"] && $mob ==  $row["MOB"])
    {
      echo "<script type='text/javascript'>alert('Email And Mobile Already Taken!');
             window.location='javascript:history.go(-1)';
             </script>";
    }
    else if( $mob ==  $row["MOB"])
    {
      echo "<script type='text/javascript'>alert('Mobile Already Taken!');
             window.location='javascript:history.go(-1)';
             </script>";
    }
    else
       {
      echo "<script type='text/javascript'>alert('Email Already Taken!');
             window.location='javascript:history.go(-1)';
             </script>";
    }

  }
}
else{
  if(!empty($fname) || !trim($fname) == '') 
  {   
  $sql = "UPDATE customer SET C_FNAME = '$fname' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["Name1"] = $fname;

  }
 if(!empty($lname) || !trim($lname) == '') 
  {   
    $sql = "UPDATE customer SET C_LNAME = '$lname' WHERE C_ID = '$a'";
    $res = mysqli_query($conn, $sql);
    $_SESSION["Name2"] = $lname;

  }
 if(!empty($email) || !trim($email) == '') 
  {   

  $sql = "UPDATE customer SET EMAIL = '$email' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["id1"] = $email;

  }
 if(!empty($mob) || !trim($mob) == '') 
  {   

  $sql = "UPDATE customer SET MOB = '$mob' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["Phone"] = $mob;

  }
   if(!empty($hno) || !trim($hno) == '') 
  {   
        $sql = "UPDATE address SET H_NO = '$hno' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["HNO"] = $hno;
  }
   if(!empty($area) || !trim($area) == '') 
  {   
        $sql = "UPDATE address SET ST_NO = '$area' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["STNO"] = $area;

  }
   if(!empty($city) || !trim($city) == '') 
  {   
        $sql = "UPDATE address SET CITY = '$city' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["CT"] = $city;

  }

 if(!empty($state) || !trim($state) == '') 
  {   
   $sql = "UPDATE address SET STATE = '$state' WHERE C_ID = '$a'";
   $res = mysqli_query($conn, $sql);
$_SESSION["ST"] = $state;

  }
 if(!empty($pin) || !trim($pin) == '') 
  {   
  $sql = "UPDATE address SET PIN = '$pin' WHERE C_ID = '$a'";
  $res = mysqli_query($conn, $sql);
  $_SESSION["PC"] = $pin;

  }
echo "<script type='text/javascript'>alert('Data saved successfully!');
             window.location='javascript:history.go(-2)';
             </script>";
             }           
  

  }
   ?>