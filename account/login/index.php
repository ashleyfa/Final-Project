<?php
    session_start();
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
    require 'checkuser.php';
    //require 'validation.php';
    
    $page_title = "Login - Downtown Fashion";
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
            "About-ICS415"=>"../../about/about-ics415",
            "Cart"=>"../../cart",
            "Account"=>"../../account",
            "Logout"=>"../../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../../bootstrap/js/bootstrap.min.js",
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
                <li>Login</li>
            </ol>
            <div class = "row">
                <div class="col-xs-12 col-sm-6 login">
                    <h4>Returning User</h4>
                    <div class = "signinpadding">
                        <form method="post" action="index.php" class="form-horizontal">
                        <div class="form-group">
                            <span id="message"><?php echo $_SESSION['loginerr']; ?></span>
                            <input type="text" name="email" id="email" placeholder="Email Address" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                            <input type="password" name="password" id="password" placeholder="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                            <p style="text-align: right;"><i class="fa fa-question-circle"></i> Forgot password?</p>
                            <label><input type="checkbox" id="remember" name="remember"> Remember Me</label>
                            <input type="submit" name="login" value="Login"> 
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 newuser">
                    <h4>Don't Have An Account?</h4>
                    <p>Create an account to track your orders, create a wishlist and more.</p>
                    
                    <div id ="createAcount-wrapper">
                        <form action="../../account/signup" method="post">
                            <input type="submit" value="Register" id="register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('../../main/footer.php'); 
?>