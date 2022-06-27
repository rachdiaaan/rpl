<?php
    #ikuti guideline

    $transaction_id = $_POST['transaction_id'];
    $payment_date = $_POST['payment_date'];
    $material_quantity = $_POST['material_quantity'];
    $price_per_unit = $_POST['price_per_unit'];
	$total_payment = $_POST['total_payment'];
	$due_date = $_POST['due_date'];
	$invoice_status = $_POST['invoice_status'];
	$procurement_id = $_POST['procurement_id'];
   
    $row = $dbconnect->query("INSERT INTO procurement_transaction VALUES ('$transaction_id', '$payment_date', '$material_quantity', '$price_per_unit', 
    '$total_payment', '$due_date', '$invoice_status', '$procurement_id')");

    header("location:../views/employee/procurement/pt.php?page=1B");
?>