<?php
if (isset($_POST['increase'])) {
	include("dbcon5.php");
} 
else if (isset($_POST['decrease']))  {
	include("dbcon5_2.php");
}
else {
	echo "Error";
}
?>