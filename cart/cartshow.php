<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>

<html>
<title>Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
html, body, h1, h2, h3, h4, h5 {
  font-family: 'Roboto', sans-serif;
}
.button {
  border-radius: 2px;
  background-color: #000000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 3px;
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
  font-family: Didot;
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
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}
th{background-color: grey;
font-color:white;}

</style>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<font color="teal"> <h3 class="w3-bar-item w3-xlarge">MENU</h3> </font>
  <a href="http://localhost/buch/login/account.php" class="w3-bar-item w3-button w3-xlarge">View Account</a>
  <a href="http://localhost/buch/Search.php" class="w3-bar-item w3-button w3-xlarge">Search</a>
  <a href="#" class="w3-bar-item w3-button w3-xlarge">View Cart</a>
  <a href="http://localhost/buch/wishlist/wishlistshow.php" class="w3-bar-item w3-button w3-xlarge">View Wish List</a>
  <a href="http://localhost/buch/cart/purchasehistory.php" class="w3-bar-item w3-button w3-xlarge">View Purchase History</a>
  <a href="http://localhost/buch/product/returnproduct.php#" class="w3-bar-item w3-button w3-xlarge">Return Books</a>
  <a href="http://localhost/buch/feedback.php" class="w3-bar-item w3-button w3-xlarge">Give Feedback</a>
</div>
<div style="margin-left:25%">

<div class="w3-container w3-teal w3-xlarge">
  <h1>CUSTOMER PROFILE</h1>
</div> 


<div style="text-align: center">
  <div style="overflow-x:auto;">
<table>
  <tr>
    <th> Book ID </th>
    <th> Book Name </th>
    <th> Price </th>
    <th></th>
    <th></th>
  </tr>
  <?php
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 20;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $a = $_SESSION["ID"];
        $total_pages_sql = "SELECT COUNT(*) FROM cart WHERE C_ID = '$a' ";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $total = 0 ;
        $counter = 0;


        $sql = "SELECT * FROM cart WHERE C_ID = '$a'  LIMIT $offset, $no_of_records_per_page ";
        $res_data = mysqli_query($conn,$sql); 
        echo '<font color="black"><h2 style="text-align:center">Your Cart</h2></font>';
        while($row = mysqli_fetch_array($res_data)){
          $id = $row["B_ID"];
          $total += $row["BP"];
          $counter++;

    ?>

  
  <tr>
    <td><?php echo $row["B_ID"];?></td>
<td><?php echo $row["BN"];?></td>
<td><?php echo "₹ ".$row["BP"];?></td>
<td><?php echo "<a href='http://localhost/buch/product/viewproduct.php?id=$id'><p><button class='button'><span>VIEW</span></button></p></a>";?></td>
<td><?php echo "<a href='http://localhost/buch/cart/deletefromcart.php?id=$id'><p><button class='button'><span>REMOVE</span></button></p></a>";?></td>
</tr>
<?php
   }
        mysqli_close($conn);
?>

</table>
<?php 
echo  '<p style="font-size:30px" >'."The Total items =   ".$counter.'</p>';
echo  '<p style="font-size:30px" >'."The Total amount is =  ₹ ".$total.'</p>';?>
<?php 
   $_SESSION["tp"] = $total;
   $_SESSION["counter"] = $counter;
echo "<a href='http://localhost/buch/cart/checkout.php?'><p><button class='button'><span>CHECK OUT</span></button></p></a>";?>
</div>
</body>
</html>
