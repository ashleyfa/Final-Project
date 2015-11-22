<?php
    $page_title = "Sign Up - Downtown Fashion";
    include('../main/head.php');
?>
<head>
    <link href="../main/style.css" rel="stylesheet" type="text/css">
    <link href="../main/nav.css" rel="stylesheet" type="text/css">
</head>
<div class ="wrapper">
    <div id ="header_desc">
        <div class="container">
            <div id = "df_name">
                 <a href="/home/" class="company_name">Downtown Fashion</a>
            </div>
            <div class="push"></div>
            <?php 
                include('../main/header.php');
            ?>
        </div>
    </div>

    <div id="signup">
        <div class="container">
            <article>
            	<div id = "signup2">
					<?php
						// define variables and set to empty values
						$nameErr = $emailErr = $lastErr = "";
						$name = $email = $last = "";

						if ($_SERVER["REQUEST_METHOD"] == "POST") {
						   if (empty($_POST["name"])) {
						     $nameErr = "Name is required";
						   } else {
						     $name = test_input($_POST["name"]);
						     // check if name only contains letters and whitespace
						     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						       $nameErr = "Only letters and white space allowed"; 
						     }
						   }
						     if (empty($_POST["lastname"])) {
						     $lastErr = "Last Name is required";
						   } else {
						     $name = test_input($_POST["name"]);
						     // check if name only contains letters and whitespace
						     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						       $nameErr = "Only letters and white space allowed"; 
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
						     
						  
						}

						function test_input($data) {
						   $data = trim($data);
						   $data = stripslashes($data);
						   $data = htmlspecialchars($data);
						   return $data;
						}
						?>

						<h2></h2>
						<p><span class="error">* required field.</span></p>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
						   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
						   <span class="error">* <?php echo $emailErr;?></span>
						   <br><br>
						   <input type="submit" name="submit" value="Submit"> 
						</form>
            	</div>
                <div class="push"></div>
            </article>
        </div>
         <div class="push"></div>
    </div>
    <div class="push"></div>
</div>

<?php 
    include('../main/footer.php'); 
?>
