<?php 

	#ikuti guideline

	$row = $dbconnect->query("DELETE FROM material WHERE material_id='$material_id'");
	
	
	header("location:../views/employee/procurement/material.php?page=2A");

?>