<?php 

include "../config/conn.php";

$request_id = $_POST['request_id'];
$material_id = $_POST['material_id'];
$material_amount = $_POST['material_amount'];
$material_status = $_POST['material_status'];

$row = $dbconnect->query("UPDATE material_request SET material_id='$material_id', material_amount='$material_amount', material_status='$material_status'  WHERE request_id='$request_id'");

header("location:../views/employee/procurement/material_request.php?page=3A");
?>