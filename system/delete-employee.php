<?php 
	session_start();
	include "../config/conn.php";

	$employee_id = $_GET['id'];

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("DELETE FROM employee WHERE employee_id='$employee_id'");
		// use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/employee.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>
