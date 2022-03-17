<?php
if (isset($_POST['increase'])) {
	include("dbcon8.php");
} 
else if (isset($_POST['decrease']))  {
	include("dbcon8_2.php");
}
else {
	echo "Error";
}
?>