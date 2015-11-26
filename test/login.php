<?php
/*
 * Login page
 *
 * User enters email and password.
 * When user hits submit, it performs the action
 * which is set to login.php.  
 *
 * The "require" page is set the php backend.
 * It checks to see if the username and password 
 * has any matches in the database.  If there is,
 * it will redirect the user to the home.php page.
 * If not, redirects the user to the login.php page.
 */

require 'checkuser.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login.php" method="post">
		<span name="success"><?php echo $success;?></span><br>
		Email: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="login" name="login">
		<span name="message"><?php echo $loginErr;?></span> <!-- Display error message from login.php-->
	</form>
</body>
</html>