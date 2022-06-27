<?php 
	session_start();
	include "../config/conn.php";

	$account_id = $_GET['id'];

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("DELETE FROM account WHERE account_id='$account_id'");
		// use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/account.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>
