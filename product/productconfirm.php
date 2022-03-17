<?php
include_once("E:\Gradprojct\htdocs\buch\header.php");
include_once("E:\Gradprojct\htdocs\buch\login\connect.php");
?>
<!DOCTYPE html>
<html>
<head><title> CONFIRMATION PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body, h2 {
  font-family: 'Roboto', sans-serif;
  background-color: #f2f2f2;
}

* {
  box-sizing: border-box;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
  <strong><h2 class="w3-text-blue" style="font-size:50px">Confirmation Page</h2></strong>
  </div>
  <div class="row">
    <div class="column">
     <strong> <p style="font-size:20px"> Book ID:</p></strong>
     <strong> <p style="font-size:20px">Book Name:</p></strong>
     <strong> <p style="font-size:20px">Author:</p></strong>
     <strong> <p style="font-size:20px">Publisher:</p></strong>
     <strong><p style="font-size:20px">Publication Year:</p></strong> 
     <strong> <p style="font-size:20px">Price:</p></strong>
     <strong> <p style="font-size:20px">Mode of Payment:</p></strong>
     <strong> <p style="font-size:20px">Expected date of Delivery:</p></strong>
     <strong><p class="w3-text-red" style="font-size:20px"><a href="javascript:history.go(-1)"> ⮜⮜ Back</a></p></strong>


    </div>
    <div class="column">
      <form action="confirmdb.php">
        <?php
                       echo '<p style="font-size:20px">'." ".$_SESSION["i1"].'</p>';
                       echo '<p style="font-size:20px">'." ".$_SESSION["i2"].'</p>';
                       echo '<p style="font-size:20px">'." ".$_SESSION["i4"].'</p>';
                       echo '<p style="font-size:20px">'." ".$_SESSION["i5"].'</p>';
                       echo '<p style="font-size:20px">'." ".$_SESSION["i6"] .'</p>';
                       echo '<p style="font-size:20px">'." ".$_SESSION["i7"].'</p>';
                       echo '<p style="font-size:20px">Cash On Delivery</p>';
                       $date = date("d/m/Y");
                       echo date('d/m/Y', strtotime($date. ' + 11 days'));;
       ?>
       <strong><p class="w3-text-green" style="font-size:20px"><a><button>CONFIRM</button></a></p></strong>
      </form>
    </div>
  </div>
</div>

</body>
</html>
