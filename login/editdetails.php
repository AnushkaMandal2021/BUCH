<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
?>

<html>
<title>Customer Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
html, body, h1, h2, h3, h4, h5 {
font-family: 'Roboto', sans-serif;
}
.button {
  border-radius: 4px;
  background-color: #000000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 175px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button1 {
  border-radius: 2px;
  background-color: grey;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1000px;
  margin: auto;
  text-align: center;
  font-family: 'Roboto', sans-serif;
}

.title {
  color: black;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
p {
    color: red;
    text-align: center;
    font-size: 40px;

}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 750px; 
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
</style>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<font color="teal"> <h3 class="w3-bar-item w3-xlarge">MENU</h3> </font>
  <a href="http://localhost/buch/login/account.php" class="w3-bar-item w3-button w3-xlarge">View Account</a>
  <a href="http://localhost/buch/Search.php" class="w3-bar-item w3-button w3-xlarge">Search</a>
  <a href="http://localhost/buch/cart/cartshow.php" class="w3-bar-item w3-button w3-xlarge">View Cart</a>
  <a href="http://localhost/buch/wishlist/wishlistshow.php" class="w3-bar-item w3-button w3-xlarge">View Wish List</a>
  <a href="http://localhost/buch/cart/purchasehistory.php" class="w3-bar-item w3-button w3-xlarge">View Purchase History</a>
  <a href="http://localhost/buch/product/returnproduct.php#" class="w3-bar-item w3-button w3-xlarge">Return Books</a>
  <a href="http://localhost/buch/feedback.php" class="w3-bar-item w3-button w3-xlarge">Give Feedback</a>
</div>
<div style="margin-left:25%">

<div class="w3-container w3-teal w3-xlarge">
  <h1>Edit Details</h1>
</div>
<div class="w3-container">
  <form action="upload.php" method="POST" enctype="multipart/form-data">
<font color="black"><span style="font-size: 20px">Profile image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font>
<input type="file" name="file">   
<button type="submit" name="submit" class="button1"> UPLOAD </button> 
</form>
</div> 



  <form action="editdetailsdb.php" method="GET" >
  
  
<div class="row">
  <div class="column">
    
      <font color="black"><h4>First Name:</h4></font><br>
      <font color="black"><h4>Last Name:</h4></font><br>
      <font color="black"><h4>Email:</h4></font><br>
      <font color="black"><h4>Mobile:</h4></font><br>
      <font color="blue"><h1>Address</h1></font><br>
      <font color="black"><h4>Flat, House no., Building, Company, Apartment:</h4></font><br>
      <font color="black"><h4>Area, Colony, Street, Sector, Village: </h4></font><br>
      <font color="black"><h4>Town/City: </h4></font><br>
      <font color="black"><h4>State: </h4></font><br>
      <font color="black"><h4>Pincode: </h4></font><br>


  </div>
  <div class="column" style="text-align: left">
      <input type="text" name="fname" placeholder="Enter First Name"><br>
      <input type="text" name="lname" placeholder="Enter Last Name"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
      <input type="text" name="phone" placeholder="Enter Mobile"><br><br><br><br><br><br>
        <input type="text" name="house" placeholder="Enter Flat, House no., Building, Company, Apartment"><br>
      <input type="text" name="area" placeholder="Enter Area, Colony, Street, Sector, Village"><br>
        <input type="text" name="city" placeholder="Enter Town/City"><br>
      <input type="text" name="state" placeholder="Enter State"><br>
        <input type="text" name="pincode" placeholder="Enter Pincode"><br>
      <button class="button"><span>SAVE</span></button>
</div>
</form>
</div>
</body>
</html>
