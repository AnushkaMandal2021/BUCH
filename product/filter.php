<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
  include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>

<!DOCTYPE html>
<html>
<title>Filter</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
html, body, h1, h2, h3, h4, h5 {
font-family: 'Roboto', sans-serif;
}
.checked {
  color: orange;
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
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<font color="teal"> <h3 class="w3-bar-item w3-xlarge">MENU</h3> </font>
  <a href="http://localhost/buch/login/account.php" class="w3-bar-item w3-button w3-xlarge">View Account</a>
  <a href="http://localhost/buch/Search.php" class="w3-bar-item w3-button w3-xlarge">Search</a>
  <a href="http://localhost/buch/cart/cartshow.php" class="w3-bar-item w3-button w3-xlarge">View Cart</a>
  <a href="http://localhost/buch/wishlist/wishlistshow.php" class="w3-bar-item w3-button w3-xlarge">View Wish List</a>
  <a href="http://localhost/buch/cart/purchasehistory.php" class="w3-bar-item w3-button w3-xlarge">View Purchase History</a>
  <a href="http://localhost/buch/product/returnproduct.php##" class="w3-bar-item w3-button w3-xlarge">Return Books</a>
  <a href="http://localhost/buch/feedback.php" class="w3-bar-item w3-button w3-xlarge">Give Feedback</a>
</div>
<div style="margin-left:25%">


 <?php
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $genre = $_GET['genre'];
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM books WHERE B_GENRE = '$genre' ";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT COUNT(*) FROM books WHERE B_GENRE = '$genre' LIMIT $offset, $no_of_records_per_page ";
        $res_data = mysqli_query($conn,$sql);
        echo '<div class="w3-container w3-teal w3-xlarge">';
        echo "<h2>You Have Searched For ".$genre."!!";"</h2>";
        echo"</div>";  
        while($row = mysqli_fetch_array($res_data)){


    ?>

  
<div class="w3-panel w3-border-bottom ">
<div class="w3-container">
 <div class="w3-row-padding">
   <div class="w3-col s4">
    
       <img src="product/images/<?php echo $row['B_NAME'];?>.jpg" alt="<?php echo $row['B_NAME'];?>" style="width:60%">
       
    </div>
 <div class="w3-col s4">
    <h1> <p class="w3-xlarge"><?php echo $row["B_NAME"];?></p> </h1>
<?php
    $nostar = 5 - $row["B_RATING"];
 for ($i=0; $i<$row["B_RATING"]; $i++) { 
   echo '<span class="fa fa-star checked"></span>';
   if( $i == ($row["B_RATING"] - 1) )
   {
    for ($j=0; $j < $nostar ; $j++) { 
      echo '<span class="fa fa-star unchecked"></span>';
    }
    
   }
  } 
?>   
     <p class="w3-medium"><?php echo "BY :  ".$row["B_AUTHOR"];?></p>
     <p class="w3-medium"><?php echo "PUBLISHER :  ".$row["B_PUBLISHER"];?></p>
     <p class="w3-medium"><?php echo "PUBLICATION YEAR :  ".$row["B_PUBLISHDATE"];?></p>
     <p class="w3-xxlarge"><?php echo "₹ ".$row["B_PRICE"];?></p>
    </div>
 <div class="w3-col s4">

      <?php  
      $id = $row["B_ID"];
      echo "<a href='http://localhost/buch/product/viewproduct.php?id=$id'><p><button class='button'><span>VIEW PRODUCT</span></button></p></a>";
       echo "<a href='http://localhost/buch/wishlist/addtowishlist.php?id=$id'><p><button class='button'><span>ADD TO WISHLIST</span></button></p></a>";
        echo "<a href='http://localhost/buch/cart/addtocart.php?id=$id'><p><button class='button'><span>ADD TO CART</span></button></p></a>";
      ?>
       
     </div>
     
    </div>
</div>
</div>
    <?php
        }
        mysqli_close($conn);
    ?>
<div class="pagination1">
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1)."&search=".$search; } ?>"><button class="button">❮ PREVIOUS</button></a>
        </li>
 </div>
<div class="pagination2">        
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1)."&search=".$search; } ?>"><button class="button">NEXT ❯</button></a>
        </li>
    </div>
</body>
</html>