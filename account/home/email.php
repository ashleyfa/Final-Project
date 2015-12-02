<?php
session_start(); // Start up the php session
require "../../db/connection.php";
require "changeemail.php";

if($_SESSION['Login'] != "YES") { // Checks to see if user is not logged in and send them back to the login.php page.
	header("Location: login.php"); 
}
echo "Welcome ". ucfirst($_SESSION['firstname']); // Welcomes the user by their first name set to Uppercase First Letter.
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="email.php">
	Update Email: <input type="text" name="email" value=" <?php echo $_SESSION['email'] ?>">
	<br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>