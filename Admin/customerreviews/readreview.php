<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>

<!DOCTYPE html>
<html>
<title>Read Review</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body{background-color: #888888;}	
html, body, h1, h2, h3, h4, h5 {
font-family: 'Roboto', sans-serif;
}
.button {
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
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
  max-width: 1000px;
  margin: auto;
  text-align: center;
  background-color: #888888;
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
.dropbtn {

  color: white;
  padding: 20px;
  font-size: 22px;
  border: none;
}

.dropdown {
  position: relative;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ccc;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ccc;}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
p {
    color: black;
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

</style>
<body>
 <div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
 	
  <font color="black"> <h3 class="w3-bar-item w3-xlarge">MENU</h3> </font>
  <a href="http://localhost/buch/Admin/login/Adminaccount.php" class="w3-bar-item w3-button w3-xlarge">View Account</a>
  <div class="dropdown">
  <button class="dropbtn w3-bar-item w3-button ">Edit Inventory</button>
  <div class="dropdown-content">
    <a href="http://localhost/buch/Admin/Inventory/addbook.php">Add Book</a>
    <a href="http://localhost/buch/Admin/Inventory/removebook.php">Remove Book</a>
    <a href="http://localhost/buch/Admin/Inventory/modify/modifybook1.php">Modify Book</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn w3-bar-item w3-button ">Manage Orders</button>
  <div class="dropdown-content">
    <a href="http://localhost/buch/Admin/Orders/confirmorders.php">Confirm Orders</a>
    <a href="http://localhost/buch/Admin/Orders/trackorders.php">Track Orders</a>
    <a href="http://localhost/buch/Admin/Orders/cancelorders.php">Cancel Orders</a>
    <a href="http://localhost/buch/Admin/Orders/returnorders.php">Return Orders</a>
    <a href="http://localhost/buch/Admin/Orders/vieworders.php">View Orders</a>
  </div>
</div>
 <a href="http://localhost/buch/Admin/customerreviews/customerreviews.php" class="w3-bar-item w3-button w3-xlarge">View Customer Reviews</a>
  <a href="http://localhost/buch/Admin/Viewbooks/viewusers.php" class="w3-bar-item w3-button w3-xlarge">View Users</a>
  <a href="http://localhost/buch/Admin/Viewbooks/viewbooks.php" class="w3-bar-item w3-button w3-xlarge">View Books</a>
  <a href="#" class="w3-bar-item w3-button w3-xlarge">Customize Prices</a>
  
 </div>
 <div style="margin-left:25%">

 <div class="w3-container w3-darkgrey w3-xlarge">
 <font color="black"><h1 style="text-align:center">Administrator Profile</h1></font>
 </div>
 <div class="card">

<?php
$rid = $_GET['rid'];
$sql = "SELECT * FROM reviews WHERE R_ID = '$rid'";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res))
{
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
<h3> <strong> Title  </h3></strong>
  <strong><textarea id="message" name="head" rows="1" cols="87" maxlength="100" required disabled><?php echo $h; ?></textarea><br></strong>
<h3> <strong> Review  </h3></strong>
  <strong><textarea id="message" name="body" rows="20" cols="87" maxlength="500" required disabled><?php echo $b;?></textarea></strong>

  <strong><p class="w3-text-black" style="font-size:20px"><a href="customerreviews.php">  <button class="button">⮜⮜ BACK</button></a></p></strong>
<?php } ?>
 </div>
</body>
</html>
