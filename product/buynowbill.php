<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>
<!DOCTYPE html>
<html>
<head><title>BILL GENERATION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body, h2 {
 font-family: 'Roboto', sans-serif;
  background: url('thankyou.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

* {
  box-sizing: border-box;
}
.container {
  border-radius: 5px;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

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
<strong><p class="w3-text-red" style="font-size:20px"><a href="javascript:history.go(-2)"> ⮜⮜ Back</a></p></strong>
<div class="container">
  <div style="text-align:center">
  <strong><h2 style="font-size:50px">Bill</h2></strong>
  </div>
  <div class="row">
    <div class="column">
     


    </div>
    <div class="column">
        <?php
             $a = $_SESSION["ID"];
             $pid = $_SESSION['$pid'];

             $sql1 = "SELECT * FROM address WHERE C_ID = '$a'";
             $res_data1 = mysqli_query($conn,$sql1);

             echo '<p><strong><span style="font-size:20px">Bill ID:'."  ".$pid.'</strong></span></p>';
             echo '<p><strong><span style="font-size:20px">Total Items: 1</strong></span></p>';
             echo'<strong> <p style="font-size:20px">Book ID(s):'.'  ';
             echo ''.'<strong><span style="font-size:20px">'.$_SESSION["i1"].'</strong></span>';
             echo ''.'</p></strong>';
             echo '<strong> <p style="font-size:20px">Book Name(s):';
             echo ''.$_SESSION["i2"].',';
             echo ''.'</p></strong>';

            echo '<p><strong><span style="font-size:20px">Total Amount:  ₹ '.$_SESSION["i7"].'</span></strong></p>';
            echo '<p><strong><span style="font-size:20px">Deliver To: <br><br>'.$_SESSION["Name1"]." ".$_SESSION["Name2"].'</span></strong></p>';

            while($row3 = mysqli_fetch_array($res_data1))
              {

                 echo '<p><strong><span style="font-size:20px">'.$row3["H_NO"].' , '.$row3["ST_NO"].' , '.$row3["CITY"].' , '.$row3["STATE"].' , '.$row3["PINCODE"].'</strong></span></p>';

              }
                          
             echo '<br><strong><span style="font-size:20px">Mode of Payment: Cash On Delivery</span></strong>';

             $date = date("d-m-Y");
             echo '<p><strong><span style="font-size:20px">Date of Purchase: '.$date.'</strong></span></p>';

             echo '<p><strong><span style="font-size:20px">Expected date of Delivery: '.date('d-m-Y', strtotime($date. ' + 11 days')).'</p></strong></span>';;

             echo '<strong><p style="font-size:20px">Status: NOT DISPATCHED</p></strong>';

                      ?>

    </div>
  </div>
</div>

</body>
</html>
