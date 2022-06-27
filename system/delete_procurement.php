<?php 

	#ikuti guideline

	$row = $dbconnect->query("DELETE FROM procurement WHERE procurement_id='$procurement_id'");
	
	
	header("location:../views/employee/procurement/procurement.php?page=1A");

?>