<!DOCTYPE html>
<html>
<title>Customize Price</title>
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1000px;
  margin: auto;
  text-align: center;
  background-color:#888888;

}

.title {
  color: teal;
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
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
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
  <a href="http://localhost/buch/Admin/CustomizePrice/customizeprice.php#" class="w3-bar-item w3-button w3-xlarge">Customize Prices</a>
  
 </div>
 <div style="margin-left:25%">

 <div class="w3-container w3-darkgrey w3-xlarge">
 <font color="black"><h1 style="text-align:center">Administrator Profile</h1></font>
 </div> 
 <font color="black"><h2 style="text-align:center">Customize Price</h2></font>

 <div class="card">
   <br>
   <font color="black"><h2 style="text-align:center">Customize Prices By:</h2></font></a><br>
     <form action = "add2.php" method="POST">
     <div class="row">
     <div class="column">
      <font color="black"><h4><b>Book Genre</b></h4></font><br>
      <font color="black"><h4><b>Percentage</b></h4></font>

      
     </div>
     <div class="column">
      <input type="text" name="genre" placeholder="Enter Book Genre">
      <input type="text" name="discount" placeholder="Enter Percentage"><br>
      <button class="button" type = "submit" name = "increase"><span>Hike</span></button>
      <button class="button" type="submit" name="decrease"><span>Discount</span></button>
     </div>
     </div>
 </form>
    
</body>
</html>
  
