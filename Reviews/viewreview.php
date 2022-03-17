<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
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
  <h1>REVIEW</h1>
</div> 
<div class="card">
<?php
$a = $_SESSION["ID"];
$rid = $_GET['id'];
$sql = "SELECT * FROM reviews WHERE R_ID = '$rid'";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res))
{
$_SESSION['rid'] = $row['R_ID'];
$r = $row['RATE'];
$h = $row['HEAD'];
$b = $row['BODY']; 

switch ($r) {
  case '1': 
    echo '<span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1" checked disabled><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>
';
    break;
     case '2': 
    echo '<span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1" disabled><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2" checked disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>
';
    break;
     case '3': 
    echo '<span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1" disabled><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3" checked disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>
';
    break;
     case '4': 
    echo '<span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1" disabled><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4" checked disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>
';
    break;
     case '5': 
    echo '<span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="1" disabled><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="2" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="3" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><span class="fa fa-star unchecked"></span><br></span>

   <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="4" disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span><br></span>

  <span style="font-size: 20px"> <input type="radio" name="star" onclick="myFunction(this.value)" value="5" checked disabled><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br></span>
';
    break;
  
}
?>
 <strong> <input type="hidden" name="rating" id="result"></strong> 
<script>
function myFunction(star) {
  document.getElementById("result").value = star;
}
</script>
<br><br>
<h3> <strong> Title  </h3> <span class= "w3-text-red" style="font-size: 20px">(Should be within 100 characters)</span></strong>
  <strong><textarea id="message" name="head" rows="1" cols="87" maxlength="100" required disabled><?php echo $h; ?></textarea><br></strong>
<h3> <strong> Review  </h3><span class= "w3-text-red" style="font-size: 20px">(Should be within 500 characters)</span></strong>
  <strong><textarea id="message" name="body" rows="20" cols="87" maxlength="500" required disabled><?php echo $b;?></textarea></strong>

<?php
  echo '<a href="http://localhost/buch/Reviews/editreview.php?"><button class="button"><span>EDIT</span></button><br></a>';

}
?>
</div>
</body>
</html>
