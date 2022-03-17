<?php
if (isset($_POST['increase'])) {
	include("dbcon34.php");
} 
else if (isset($_POST['decrease']))  {
	include("dbcon34_2.php");
}
else {
	echo "Error";
}
?>