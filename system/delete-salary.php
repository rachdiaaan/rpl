<?php 
	session_start();
	include "../config/conn.php";

	

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
		// use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/employee/finance/salary.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>
