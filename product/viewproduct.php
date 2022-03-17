<?php
 include_once("E:\Gradprojct\htdocs\buch\header.php");
 include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>
<!DOCTYPE html>
<html>
<title>View Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body{background-color: white;}  
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
.button1 {
  border-radius: 2px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 13px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; 
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.checked {
  color: orange;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
  color:#191970;
}

a:active {
  text-decoration: underline;
  color:#00b33c;

}

}
</style>

</head>
<body>
 <strong><p class="w3-text-black" style="font-size:20px"><a href="javascript:history.go(-1)"> ⮜⮜ BACK</a></p></strong>
<div class="container">
  <div class="row">
    <div class="column" style="text-align: center">
    
     <?php
         $bid = $_GET['id'];
             $sql = "SELECT * FROM books WHERE B_ID = '$bid'";
             $res = mysqli_query($conn, $sql);
             $chck = mysqli_num_rows($res);
             if ($chck>0) 
               { 
                 while($row = mysqli_fetch_assoc($res))
                  {
                      $_SESSION["i1"] = $row["B_ID"];
                      $_SESSION["i2"] = $row["B_NAME"];
                      $_SESSION["i3"] = $row["B_RATING"];
                      $_SESSION["i4"] = $row["B_AUTHOR"];
                      $_SESSION["i5"] = $row["B_PUBLISHER"];
                      $_SESSION["i6"] = $row["B_PUBLISHDATE"];
                      $_SESSION["i7"] = $row["B_PRICE"];
                  ?>  
     <img src="images/<?php echo $row['B_NAME'];?>.jpg" alt="<?php echo $row['B_NAME'];?>" style="width:60%">


    </div>
    <div class="column" >
  <?php
               echo '<div>
              <strong><h2 class="w3-text-black" style="font-size:40px">'.$row["B_NAME"].'</h2></strong>
              </div>';
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
             $s = "APPROVED";
             $sqlusers = "SELECT COUNT(*) AS C FROM reviews WHERE B_ID = '$bid' AND STATUS = '$s'"; 
             $userres = mysqli_query($conn, $sqlusers);
             while($r = mysqli_fetch_assoc($userres))
              { echo '<p style="font-size:12px">'."(based on ".$r["C"]." ratings)".'</p>';}
            
           
             echo '<p style="font-size:20px">'."Book ID:  ".$row["B_ID"].'</p>';
             echo '<p style="font-size:20px">'."Genre: ".$row["B_GENRE"].'</p>';          
              
             echo '<p style="font-size:20px">'."Author: ".$row["B_AUTHOR"].'</p>';
             echo '<p style="font-size:20px">'."Publisher: ".$row["B_PUBLISHER"].'</p>';
             echo '<p style="font-size:20px">'."Publication Year: ".$row["B_PUBLISHDATE"].'</p>';
             echo '<p style="font-size:20px">'."Price: ₹ ".$row["B_PRICE"].'</p>';
             echo '<strong><p style="font-size:20px">'."About The Book </p></strong>";
              echo '<p style="font-size:20px">'."".$row["B_DESCRIPTION"].'</p>';
            }
          }
       ?>
        
      
      
        </div>
           <div class="column" style="text-align: center">
            <?php
            $id = $_SESSION["i1"];
            echo "<a href='http://localhost/buch/product/buynow.php?'><p><button class='button'><span>BUY NOW!</span></button></p></a>";
            echo "<a href='http://localhost/buch/wishlist/addtowishlist.php?id=$id'><p><button class='button'><span>ADD TO WISHLIST</span></button></p></a>";


            echo "<a href='http://localhost/buch/cart/addtocart.php?id=$id'><p><button class='button'><span>ADD TO CART</span></button></p></a><br><br><br>";
            echo '<div class="w3-container w3-teal">
                  <h2>CUSTOMER REVIEWS</h2>
                  </div>';
            
              $reviewsql = "SELECT * FROM reviews R INNER JOIN customer C WHERE R.C_ID = C.C_ID AND B_ID = '$bid' AND R.RATE >= 3 ORDER BY R.R_ID DESC LIMIT 4 ";
              $reviewresult = mysqli_query($conn, $reviewsql);
              $reviewcheck = mysqli_num_rows($reviewresult);
              echo '<div class="w3-container">';
              $reviewstat = "APPROVED";
              if ($reviewcheck>0) 
              {
                while ($row = mysqli_fetch_assoc($reviewresult) )
                { 
                  if ($row["STATUS"] == $reviewstat)
                  {
                  echo '<strong><h4>'.' '.$row['HEAD'].'</h4></strong>';
                  $ns = 5 - $row["RATE"];
                  for ($i=0; $i<$row["RATE"]; $i++) 
                   { 
                  echo '<span class="fa fa-star checked"></span>';
                  if( $i == ($row["RATE"] - 1) )
                    {
                      for ($j=0; $j < $ns ; $j++) 
                      { 
                      echo '<span class="fa fa-star unchecked"></span>';
                      }
    
                    }
                  } 
                 echo '<br><strong><span style = "font-size:13px">'.' '.$row['C_FNAME'].' '.$row['C_LNAME'].'</h6></strong>';
                  echo '<p style = "font-size:12px">'.$row['BODY'].'</p>';
                 echo "<strong>------------------------------------------------------------------------------------------------</strong><br>";
                }
              }
              
            }
             
            else{
                      echo '<div class="w3-container">
                      <strong><h4>No reviews yet!</h4></strong>
                      </div>';
                        
                      }
              echo '</div>';

              

                echo '<div class="w3-container w3-teal">
                      <a href=""><p><button class="button1"><span>VIEW ALL</span></button></p></a>
                      </div>';



            ?>
           
       
     </div>
  </div>
</div>

</body>
</html>
