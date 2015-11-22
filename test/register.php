<?php

$servername = "localhost";
$username = "root";
$password = "DaG-Fkl.O9eA";
$dbname = "downtownfashion";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



// define variables and set to empty values
$fnameErr = $emailErr = $passwordErr = $repasswordErr = $lnameErr = "";
$fname = $email = $password = $repassword = $lname = "";

$pass1 = $_POST['password'];
   $pass2 = $_POST['repassword'];
   if ($pass1 !== $pass2) {
      $repasswordErr = "Password does not match";
      $passwordErr = "Password does not match";
   }
   else {


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["fname"])) {
     $fnameErr = "First name is required";
   } else {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z -]*$/",$fname)) {
       $fnameErr = "Only letters and white space allowed"; 
     }
   }
   

   if (empty($_POST["lname"])) {
     $lnameErr = "Last name is required";
   } else {
     $lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z -]*$/",$lname)) {
       $lnameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }

   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
       $passwordErr = "only letters and whitespace for password"; 
     }
   }
   // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ("Connected successfully\n");

   $result = "SELECT * FROM users WHERE email='".$conn->real_escape_string($email)."'";
$query = $conn->query($result);

$sql = "INSERT INTO users (first_name, last_name, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

if($query->num_rows === 0) {
  if ($conn->query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
  echo "User already exists!";
}

$conn->close();
   

}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>