<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
?>

<!DOCTYPE html>
<html>
<title>Search Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
html, body, h1, h2, h3, h4, h5 {
font-family: 'Roboto', sans-serif;
}
* {
  box-sizing: border-box;
}

form.field input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.field button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.field button:hover {
  background: #0b7dda;
}

form.field::after {
  content: "";
  clear: both;
  display: table;
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
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 250px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 50%;
    height: 50%;
  }
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
  <h1>SEARCH</h1>
</div> 
<div>
  

<font color="black"><p class= "w3-xlarge"> <strong>Search a book using their Name, Author name, Genre or Publisher name</strong></p></font>
<form class="field" action="dbcon12.php" method="GET">
  <input type="text" name="search" placeholder="Search..">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<form class="field" action="dbcon13.php" method="GET" >  
<div class="w3-container">
  <br>
  <h2 style="text-align: center"> OR </h2>
  <h3 style="text-align: center">  <strong> Filter: </strong> </h3>
  <font color="black"><p class= "w3-medium" style="text-align: center">( Choose a genre from the given categories of genres )</p></font>
<div class="row">
  <div class="column">
 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Horror"> Horror <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Crime"> Crime <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Thriller"> Thriller <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Mystery"> Mystery <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Detective"> Detective <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Romance"> Romance <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Comedy"> Comedy <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Biographies"> Biographies <br></span>

</div>

 <div class="column">
 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Autobiographies"> Autobiographies <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Fantasy"> Fantasy <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Academic"> Academic <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Adventure"> Adventure <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Science fiction"> Science Fiction <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="History"> History <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Travel"> Travel <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Mythological"> Mythological <br></span>

</div>

<div class="column">
 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Childrens"> Children's Books <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Motivation"> Motivational <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Religious"> Religious <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Historical fictions"> Historical Fictions <br></span>

 <span style="font-size: 20px"> <input type="radio" name="genre" onclick="myFunction(this.value)" value="Art"> Art <br></span>
 

</div>
</div>

 <strong> <input type="hidden" name="search" id="result"></strong> 
<script>
function myFunction(genre) {
  document.getElementById("result").value = genre;
}
</script>
<div class="w3-container" style="margin-left:35%"> <button class="button"> Search </button> </div>

</div>
</form>
</div>
</body>
</html>