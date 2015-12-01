<?php
  //session_start(); 

  /*
   * checkuser.php
   *
   * This is where we check the mysql database and see
   * if the user exist in the database.  If it does, 
   * start a session and load the session array with data
   * from the database and direct them to the home.php that
   * only users who can login can reach to.  If credentials 
   * does not match what's in the database, it will return an
   * error to the user saying "Wrong credentials.  Please try again."
   */

	// Credentials to the database
  // Connect to the database with $conn variable.
  require '../../db/connection.php';

   /* If user register successfully, they are directed here.
    * A session started and in the session array, the key is mapped to
    * 'YES'.  If $_SESSION['successfulReg'] === 'YES' then it will display
    * "Account created successfully.  Please login."  If the user comes 
    * directly to the page or navigates to the page, it will not display 
    * "Account created successfully.  Please login."
    */

  $success = "";
  $_SESSION['loginerr'] = "";
  if (isset($_SESSION['successfulReg'])) {
      if($_SESSION['successfulReg'] === 'YES') {
      $success = "Account created successfully.  Please login.";
      } 
  }
  
  //session_destroy(); //
  
  $loginErr = ""; //Shows error on login page if either the email or password are wrong

  // if user clicks the login button, perform the specified task
  if(isset($_POST['login'])){
  	$email = mysqli_escape_string($conn,$_POST['email']);
  	$password = mysqli_escape_string($conn,$_POST['password']);
  	$sel_user = "SELECT first_name, last_name from users where email='$email' AND password='$password'";
  	$query = $conn->query($sel_user);

  	if($query->num_rows === 1){ // If exactly 1 user exist from the query

  		//session_start();  // Start the session
  		while($row = $query->fetch_assoc()) {
  			$_SESSION['firstname'] = $row["first_name"]; // Stores firstname in a session array
  			$_SESSION['lastname'] = $row["last_name"]; // Stores lastname  in a session array
  		}
  		$_SESSION['Login'] = "YES"; //Store YES in the session array;
  		$_SESSION['email']=$email;  //Store email in the session array;
  		echo "<script>window.open('../account/home/home.php','_blank')</script>";  // Direct user to home.php
  	}
  	else {
  		$_SESSION['loginerr'] = "Wrong credentials.  Please try again.";
  	}

  }

  ?>
