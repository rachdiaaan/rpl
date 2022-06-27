<?php 

include "../config/conn.php";

    $transaction_id = $_POST['transaction_id'];
    $payment_date = $_POST['payment_date'];
    $material_quantity = $_POST['material_quantity'];
    $price_per_unit = $_POST['price_per_unit'];
	$total_payment = $_POST['total_payment'];
	$due_date = $_POST['due_date'];
	$invoice_status = $_POST['invoice_status'];
	$procurement_id = $_POST['procurement_id'];

$row = $dbconnect->query("UPDATE procurement_transaction SET payment_date='$payment_date', material_quantity='$material_quantity', price_per_unit='$price_per_unit', 
total_payment='$total_payment', due_date='$due_date', invoice_status='$invoice_status', procurement_id='$procurement_id' WHERE transaction_id='$transaction_id'");

#ikuti guideline
?>