<?php 
	// Activate Session
	session_start();
	 
	// Delete all session
	session_destroy();
	 
	// redirect with message
	header("location:../index.php?");
?>