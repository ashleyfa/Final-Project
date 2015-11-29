<!DOCTYPE HTML> 
<html>
<head>
   <style>
      .error {color: #FF0000;}
   </style>
   <script type="text/javascript" src="passtest.js"></script>
</head>
<body> 

   <?php 
    /* 
     * validation.php
     *
     * checks to see if a user's email already exist in the 
     * database.  If it does not exist and all credentials 
     * that are being ask are correctly filled out, it will
     * create the new user.  If not, it will display the 
     * proper error message.
     */
   require '../db/connection.php';
   require '../signup/validation.php';
   ?>

   <h2>PHP Form Validation Example</h2>
   <p><span class="error">* required field.</span></p>
   <form method="post" action="../js/register.php"> 
      First Name: <input type="text" name="fname">
      <span class="error">* <?php echo $fnameErr;?></span>
      <br><br>
      Last Name: <input type="text" name="lname">
      <span class="error">* <?php echo $lnameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Password: <input type="text" id="pass1" name="password">
      <span class="error">* <?php echo $passwordErr;?></span>
      <br><br>
      Re-enter Password: <input type="text" id="pass2" name="repassword" onkeyup="checkPass(); return false;">
      <span id="confirmMessage"class="error">* <?php echo $repasswordErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit"> 
   </form>

</body>
</html>