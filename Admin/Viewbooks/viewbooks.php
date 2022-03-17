<?php
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");

?>
<!DOCTYPE html>
<html>
<title>View Books</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body{background-color: #888888;}  
html, body, h1, h2, h3, h4, h5 {
font-family: 'Roboto', sans-serif;
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
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}
th{background-color: #696969;
font-color:white;}
.checked {
  color: orange;
}
.pagination1 {
  display: inline-block;
}
.pagination2 {
  display: inline-block;
}

.pagination1 a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  margin-left:350px;
}

.pagination2 a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  margin-center:500px;
}
.pagination1 a:hover:not(.active) {background-color: #ccc;}
.pagination2 a:hover:not(.active) {background-color: #ccc;}
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


 <div style="overflow-x:auto;">
<table>
  <tr>
    <th>Book ID</th>
    <th>Name</th>
    <th>Rating</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Publisher</th>
    <th>Publication year</th>
  </tr>
  <?php
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 20;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM books";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM books LIMIT $offset, $no_of_records_per_page ";
        $res_data = mysqli_query($conn,$sql);
        echo '<div class="w3-container w3-xlarge">';
        echo '<font color="black"><h1 style="text-align:center">Administrator Profile</h1></font>';
        echo '</div>';
        echo '<font color="black"><h2 style="text-align:center">Books List</h2></font>';
        while($row = mysqli_fetch_array($res_data)){
    ?>

  
  <tr>
    <td><?php echo $row["B_ID"];?></td>
    <td><?php echo $row["B_NAME"];?></td>

    <td>  <?php
    $nostar = 5 - $row["B_RATING"];
 for ($i=0; $i<$row["B_RATING"]; $i++) { 
   echo '<span style="font-size:13px" class="fa fa-star checked"></span>';
   if( $i == ($row["B_RATING"] - 1) )
   {
    for ($j=0; $j < $nostar ; $j++) { 
      echo '<span style="font-size:13px" class="fa fa-star unchecked"></span>';
    }
    
   }
  } 
?> </td>
<td><?php echo $row["B_AUTHOR"];?></td>
<td><?php echo $row["B_GENRE"];?></td>
<td><?php echo "₹ ".$row["B_PRICE"];?></td>
<td><?php echo $row["B_PUBLISHER"];?></td>
<td><?php echo $row["B_PUBLISHDATE"];?></td>
  </tr>
<?php
   }
        mysqli_close($conn);
?>
</table>
</div>
<div class="pagination1">
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">❮ Previous Page</a>
        </li>
 </div>
<div class="pagination2">        
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next Page ❯</a>
        </li>
    </div>
</body>
</html>