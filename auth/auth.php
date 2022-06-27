<?php 
	session_start();
	//Check login status
	if (isset($_SESSION['status'])) {
		header("location: ".$_SESSION['role']."/home.php?page=home");
	}
?>