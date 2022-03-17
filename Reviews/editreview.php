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
.checked {
  color: orange;
}
textarea {
  resize: none;
}
input[type=text], select, textarea {
  width: 87%;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  border: solid;
}

.checked {
  color: orange;
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
  <h1>EDIT REVIEW</h1>
</div> 


<div class="card">
<form action="editreviewdb.php" method="GET">
<h3>  <strong> Select a Rating  </strong> </h3>

 <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1"><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>


 <strong> <input type="hidden" name="rating" id="result"></strong> 
<script>
function myFunction(star) {
  document.getElementById("result").value = star;
}
</script>
<br><br>
<h3> <strong> Title  </h3> <span class= "w3-text-red" style="font-size: 20px">(Should be within 100 characters)</span></strong>
  <textarea id="message" name="head" rows="1" cols="87" maxlength="100" ></textarea><br>
<h3> <strong> Review  </h3><span class= "w3-text-red" style="font-size: 20px">(Should be within 500 characters)</span></strong>
  <textarea id="message" name="body" rows="20" cols="87" maxlength="500" ></textarea>
  <button class="button"><span>SAVE</span></button><br>
</form>

</div>
</body>
</html>
