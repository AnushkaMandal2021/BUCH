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
  padding: 15px;
  width: 175px;
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
.a1 {
  text-decoration: none;
  font-size: 22px;
  color: blue;
}
p {
    color: red;
    text-align: center;
    font-size: 40px;

}
.a1:link {
  text-decoration: none;
}

.a1:visited {
  text-decoration: none;
}

.a1:hover {
  text-decoration: underline;
  color:#191970;
}

.a1:active {
  text-decoration: underline;
  color:#00b33c;

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
  <a href="http://localhost/buch/product/returnproduct.php" class="w3-bar-item w3-button w3-xlarge">Return Books</a>
  <a href="http://localhost/buch/feedback.php" class="w3-bar-item w3-button w3-xlarge">Give Feedback</a>
</div>
<div style="margin-left:25%">

<div class="w3-container w3-teal w3-xlarge">
  <h1>CUSTOMER PROFILE</h1>
</div> 


<div class="card">
<br><br>
 <a href='http://localhost/buch/reviews/reviewshow.php'><button class='button'><span> VIEW YOUR REVIEW </span></button></a>

<br><br>

  <strong><span class="w3-text-black" style="font-size:25px"> For feedbacks and complaints - </span></strong><br><br>
   <strong><span class="w3-text-black" style="font-size:25px"> Give us a call:  </span></strong><br>

  <strong><span class="w3-text-black" style="font-size:25px">  9876543210 </span></strong><br>
   <strong><span class="w3-text-black" style="font-size:15px">( from your registered mobile number)</span></strong> <br><br><br>
 
  <strong><span class="w3-text-black" style="font-size:25px">  Mail us : </span></strong> <br>
 



<?php 

$fname = $_SESSION["Name1"];
$lname = $_SESSION["Name2"];
$email = $_SESSION["id1"];
$id = $_SESSION["ID"]; 
echo '<strong><span style="font-size:25px"><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&su=PLEASE+MENTION+THE SUBJECT!!!&to=buchthestore@gmail.com&body=Write+your+feedback/Complaint+below+the+line+:+%0A+ID:+'.$id.'+%0A+Name:+'.$fname.'+'.$lname.'+%0A+email:+'.$email.'%0A----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------%0A+'.'" target="_blank" class ="a1">  buchthestore@gmail.com </a></span></strong><br>';

?>
   <strong><span class="w3-text-black" style="font-size:15px">(Please do mention the subject )</span></strong> <br>
</div>
</body>
</html>
