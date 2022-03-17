<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>
<!DOCTYPE html>
<html>
<head><title> CONFIRMATION PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body, h2 {
 font-family: 'Roboto', sans-serif;
  background-color: #f2f2f2;
}

* {
  box-sizing: border-box;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
  <strong><h2 class="w3-text-blue" style="font-size:50px">Confirmation Page</h2></strong>
  </div>
  <div class="row">
    <div class="column">
     <strong> <p style="font-size:20px">Total items:</p></strong> 
     <strong> <p style="font-size:20px">The Total amount is:</p></strong>
     <strong> <p style="font-size:20px">Mode of Payment:</p></strong>
     <strong> <p style="font-size:20px">Expected date of Delivery:</p></strong>
     <strong> <p style="font-size:20px">Delivery Address:</p></strong>
     <strong><p class="w3-text-red" style="font-size:20px"><a href="javascript:history.go(-1)"> ⮜⮜ Back</a></p></strong>


    </div>
    <div class="column">
        <?php

             $a = $_SESSION["ID"];
           
             $sql1 = "SELECT * FROM address WHERE C_ID = '$a'";
         
              $res_data1 = mysqli_query($conn,$sql1);
              $check = mysqli_num_rows($res_data1);
              if($check>0)
              {
              echo '<br>';
            echo '<strong><span style="font-size:20px">'.$_SESSION["counter"].'</strong></span>';
                  echo '<strong><p style="font-size:20px">'.$_SESSION["tp"].'</p></strong>';
                       echo '<strong><p style="font-size:20px">Cash On Delivery</p></strong>';
                       $date = date("d-m-Y");
                       echo '<strong><span style="font-size:20px">'.date('d-m-Y', strtotime($date. ' + 11 days')).'</strong></span>';;
                       echo '<br><br>';
                      
                         while($row = mysqli_fetch_array($res_data1))
                         {
                               echo '<strong><span style="font-size:20px">'.$row["H_NO"].' , '.$row["ST_NO"].' , '.$row["CITY"].' , '.$row["STATE"].' , '.$row["PINCODE"].'</strong></span>';

                         }
echo "<a href='http://localhost/buch/cart/purchasedb.php?'><p><button class='button'><span style = 'font-size:20px'>BUY</span></button></p></a>";
echo "<a href='http://localhost/buch/login/editdetails.php'><p><button class='button'><span style = 'font-size:20px'>EDIT DETAILS</span></button></p></a>";
}
else{
  
   echo "<script type='text/javascript'>alert('Add Delivery Address First!');
             window.location='http://localhost/buch/cart/address.php';
             </script>";
}
?>
    </div>
  </div>
</div>

</body>
</html>
