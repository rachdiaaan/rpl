<?php 

include "../config/conn.php";

#ikuti guideline



$row = $dbconnect->query("UPDATE procurement SET procurement_date='$procurement_date', 
procurement_stats='$procurement_stats', bom_id='$bom_id' WHERE procurement_id='$procurement_id'");

header("location:../views/employee/procurement/procurement.php?page=1A");
?>