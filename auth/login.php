<?php 
// activate session php
session_start();

include '../config/conn.php';


// get form data
$username = $_POST['username'];
$password = $_POST['password'];

$username_admin = 'adminutama';
$password_admin = '123456';

    if (($username == $username_admin) and ($password == $password_admin)){
		$_SESSION['status'] = "login";
		$_SESSION['role'] = 'Admin';
		$_SESSION['name'] = 'Admin Utama';
		header("location:../views/admin/home.php?page=home");
    }else {
		// select data that match with input
		$row = $dbconnect->query("SELECT * FROM employee INNER JOIN division ON employee.division_id = division.division_id WHERE username = '$username' and password = '$password';");

		// get data
		$data = $row->fetch();

		if($row->rowCount() > 0){
			$_SESSION['name'] = $data['name'];
			$_SESSION['division'] = $data['division_name'];
			$_SESSION['status'] = "login";
			header("location:../views/employee/".$_SESSION['division']."/home.php?page=home");
		}else{
			header("location:../views/login.php?message=failed");
		}
	}


?>