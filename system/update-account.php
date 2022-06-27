<?php 
	session_start();
	include "../config/conn.php";

	$account_id = $_POST['account_id'];
  $account_no = $_POST['account_no'];
	$account_name = $_POST['account_name'];
	

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("UPDATE account SET account_name='$account_name', account_no='$account_no' WHERE account_id='$account_id'");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/account.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
	
?>