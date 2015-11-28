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
   require '../../db/connection.php';
   require '../../account/signup/validation.php';
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home",
            "Shop"=> "../../shop",
            "Men"=>"../../shop/men",
            "Women"=>"../../shop/women",
            "Kids"=>"../../shop/kids",
            "Accessories"=>"../../shop/accessories",
            "About"=>"../../about",
            "Login"=>"../../account/login",
            "Signup"=>"../../account/signup",
            "Cart"=>"../../cart",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        );
    include('../../main/head.php');
?>
<head>
    <link href="../../main/style.css" rel="stylesheet" type="text/css">
    <link href="../../main/nav.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../js/passtest.js"></script>
</head>

<div class ="wrapper">
    <div id ="header_desc">
        <div class="container">
            <div id = "df_name">
                 <a href="../../home/" class="company_name">Downtown Fashion</a>
            </div>
            <?php 
                include('../../main/header.php');
            ?>
        </div>
    </div>

        <!-- Begin page content -->
    <div id="signin-wrapper">
         <div class="container">
            <ol class ="breadcrumb">
                <li><a href=<?php echo $navmenu['Home']?>>Home</a></li>
                <li><a href=<?php echo $navmenu['Account']?>>Account</a></li>
                <li>Register</li>
            </ol>
            <div class = "row">
                <div class="col-xs-12 col-sm-6 login">
                    <h4>New Users</h4>
                    <span id="message"></span>
                    <div id ="createAcount-wrapper">
                        <form method="post" action="register.php" class="register"> 
                            First Name<p><input type="text" name="fname" value="<?php echo $_SESSION['first'];?>"><span class="error">* <?php echo $fnameErr;?></span></p>
            
                            Last Name: <p><input type="text" name="lname" value="<?php echo $_SESSION['last'];?>">
                            <span class="error">* <?php echo $lnameErr;?></span></p>
                           
                           E-mail: <p><input type="text" name="email" value="<?php echo $_SESSION['email'];?>">
                           <span class="error">* <?php echo $emailErr;?></span></p>
                              
                           Password: <p><input type="text" id="pass1" name="password">
                           <span class="error">* <?php echo $passwordErr;?></span></p>
                        
                           Confirm Password: <p><input type="text" id="pass2" name="repassword" onkeyup="checkPass(); return false;">
                           <span id="confirmMessage"class="error">* <?php echo $repasswordErr;?></span></p>                               
                            <input type="submit" name="submit" value="Register"> or <a href=<?php echo $navmenu['Home']?>>Return to Store</a>
                        </form>

                    </div>
                </div>
            
                <div class="col-xs-12 col-sm-6 newuser">
                    <h4>Why register?</h4>
                    <p>
                        Create an account to track your orders, create a wishlist and more.
                        If you register right here, you’ll get access to sweet members-only deals! Plus, you can manage address changes and boring stuff like that in one place so you don’t have to repeat yourself every time you order. Basically, if you want the hook-up, take a couple seconds to fill out your info, and welcome to the team!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('../../main/footer.php'); 
?>