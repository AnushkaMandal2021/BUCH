<?php
if (isset($_POST['decrease'])) {
	include("dbcon7_2.php");
}
elseif (isset($_POST['increase'])) {
 	include("dbcon7.php");
 }
 else{echo "error";}
?>