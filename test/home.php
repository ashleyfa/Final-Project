<?php
session_start(); // Start up the php session

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
	<br>
	<a href="email.php">Update Email</a><span>&nbsp;&nbsp;<?php echo $_SESSION['emailupdate'] ?></span><br>
	<a href="password.php">Change password</a><br>
	<a href="logout.php">Logout</a>
</body>
</html>

