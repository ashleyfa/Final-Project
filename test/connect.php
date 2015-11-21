
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dfashion";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ("Connected successfully\n");

$name = $_POST['name'];
$email = $_POST['email'];

$result = "SELECT * FROM USER WHERE EMAIL='$email'";

if($conn->query($result) == true){
    echo ("Cannot use email");
}
else{
    $sql = "INSERT INTO USER (FIRSTNAME, EMAIL)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();

?>