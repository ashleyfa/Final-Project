<?php
session_start();  //Checks the session if there is one.
session_destroy(); //Then it destroys the session.

/*
 * Redirect
 *
 * After user clicked the logout link, the link below will
 * take the user to the specified link.  Currently it is 
 * set to the login page.
 *
 */
echo "<script>window.open('../home/index.php','_self')</script>";
?>