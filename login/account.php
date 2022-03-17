<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
header('Expires: Fri, 20 Jan 1984 01:11:11 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>

<html>
<title>Customer Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="Fri, 20 Jan 1984 01:11:11 GMT"/>
<meta http-equiv="Pragma" content="no-cache" />
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
    font-size: 35px;

}

.avatar {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
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
  <?php
  
   echo "<p> Welcome Back ".$_SESSION["Name1"]."<p>";
   $id = $_SESSION["ID"];
   $pp = $_SESSION["Pic"];
   if ($pp == 0) {
    ?>
     <img src="uploads/user<?php echo $id;?>.jpg?random=<?php echo uniqid(); ?>" class = "avatar">
    <?php
   }
  else {
    
         echo '<img src="uploads/avatar.jpg" class="avatar">';
  }

   echo "<strong><h3>Name : </strong>".$_SESSION["Name1"]." ".$_SESSION["Name2"]."</h3>";
   echo "<strong><h3>Email : </strong>".$_SESSION["id1"]."</h3>";
   echo "<strong><h3>Number : </strong>".$_SESSION["Phone"]."</h3>";

   echo "<strong><h3>Address :</strong><br>";
   echo " ".$_SESSION["HNO"]."  ".$_SESSION["STNO"]."  ".$_SESSION["CT"]."  ".$_SESSION["ST"]."  ".$_SESSION["PC"]."</h3>";
  
  ?>
  <a href="http://localhost/buch/login/editdetails.php"><button class="button"><span>EDIT DETAILS</span></button></a>
</div>
<script>
    window.setInterval('refresh()', 20000);   // Call a function every 20000 milliseconds (OR 20 seconds).

    // Refresh or reload page.
    function refresh() {
        window .location.reload();
    }
</script>
</body>
</html>
