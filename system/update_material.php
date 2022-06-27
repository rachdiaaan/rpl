<?php 

include "../config/conn.php";

#ikuti guideline

$row = $dbconnect->query("UPDATE material SET material_name='$material_name', material_price='$material_price', material_stock='$material_stock' WHERE material_id='$material_id'");

header("location:../views/employee/procurement/material.php?page=2A");
?>