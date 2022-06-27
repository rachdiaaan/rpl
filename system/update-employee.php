<?php 
	session_start();
	include "../config/conn.php";

	$employee_id = $_POST['employee_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$employee_name = $_POST['employee_name'];
	$employee_bank = $_POST['employee_bank'];
	$account_number = $_POST['account_number'];
	$division_id = $_POST['division_id'];

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("UPDATE employee SET username='$username', password='$password', employee_name='$employee_name', employee_bank='$employee_bank', account_number='$account_number', division_id='$division_id' WHERE employee_id='$employee_id'");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/employee.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
	
?>