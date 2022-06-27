<?php
    session_start();
    include "../config/conn.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $employee_name = $_POST['employee_name'];
    $employee_bank = $_POST['employee_bank'];
    $account_number = $_POST['account_number'];
    $division_id = $_POST['division_id'];


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO employee (username, password, employee_name, employee_bank, account_number, division_id) VALUES ('$username', '$password', '$employee_name', '$employee_bank', '$account_number', '$division_id')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/employee.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>