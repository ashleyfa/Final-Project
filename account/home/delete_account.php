<?php
	session_start();
	require "../../db/connection.php";

	$sql = "DELETE FROM users WHERE email = '". $_GET['email']."'";
	mysqli_query($conn, $sql) or die(mysql_error());

	session_destroy();
	header("Location: ../../home");
	die();
?>