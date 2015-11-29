<?php
	session_start(); // Start up the php session

	if($_SESSION['Login'] != "YES") { // Checks to see if user is not logged in and send them back to the login.php page.
		header("Location: login");
		die();
	}
	else{
		header("Location: home");
		die();
	}
?>