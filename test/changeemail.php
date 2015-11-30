<?php

//session_start();
require 'connection.php';
$_SESSION['emailupdate'] = '';
if(isset($_POST['submit'])) {
	if (empty($_POST['email'])) {
     $emailErr = 'Email is required';
   } else {
     $email = test_input($_POST['email']);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = 'Invalid email format'; 
     }
   }

   $oldemail = $_SESSION['email'];

   $sql = "UPDATE users SET email='$email' WHERE email='$oldemail'";
   if($query = $conn->query($sql)) {
   	$_SESSION['email'] = $email;
   	$_SESSION['emailupdate'] = 'Email Updated Successfully';
    echo "<script>window.open('home.php','_self')</script>";
   }
   
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>