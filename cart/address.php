<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>
<!DOCTYPE html>
<html>
<head><title>Confirmation Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
  body,h2{
    font-family: 'Roboto', sans-serif;
    background-color: teal;
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
.pwd-box input{
    width: 100%;
    margin-bottom: 20px;
    font-family: Didot;
    font-color:black;
}
.pwd-box input[type="text"]{
    border: none;
    border-bottom: 1px solid #fff;
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    font-color:black;
    font-family: Didot;
}
.pwd-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-color:black;
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
  <strong><h2 class="w3-text-black" style="font-size:40px">Add Delivery Address</h2></strong>
  </div>
  <div class="row">
    <div class="column">
      <br>
    <img src="delivery.jpg" alt="delivery" style="width:75%">
  

    </div>
     <div class="pwd-box">
    <div class="column">
      <form action="addressdb.php" method="GET" autocomplete="off">
            <strong> <p style="font-size:20px">Flat, House no., Building, Company, Apartment:</p></strong>
            <p><input type="text" name="house" placeholder="Enter Flat, House no., Building, Company, Apartment"></p>
             <strong> <p style="font-size:20px">Area, Colony, Street, Sector, Village: </p></strong>
            <p><input type="text" name="area" placeholder="Enter Area, Colony, Street, Sector, Village"></p>

             <strong> <p style="font-size:20px">Town/City: </p></strong>
            <p><input type="text" name="city" placeholder="Enter Town/City"></p>

            <strong> <p style="font-size:20px">State: </p></strong>
            <p><input type="text" name="state" placeholder="Enter State"></p>

            <strong> <p style="font-size:20px">Pincode: </p></strong>
            <p><input type="text" name="pincode" placeholder="Pincode"></p>
            <strong><p class="w3-text-green" style="font-size:15px"><button>SAVE ⮞⮞</button></p></strong>
        </form>
    </div>
  </div>
</div>
</div>

</body>
</html>
