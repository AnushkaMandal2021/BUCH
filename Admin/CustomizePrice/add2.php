<?php
if (isset($_POST['increase'])) {
	include("dbcon4.php");
}
 else if(isset($_POST['decrease'])) {
	include("dbcon4_2.php");
}
else {
	echo "Error";
}
?>