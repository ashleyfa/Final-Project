<?php
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../home",
            "Shop"->"../shop",
            "Men"=>"../shop/men",
            "Women"=>"../shop/women",
            "Kids"=>"../shop/kids",
            "Accessories"=>"../shop/accessories",
            "About"=>"../about",
            "Signup"=>"../signup",
            "Cart"=>"../cart",
        );
    $bootstrapLinks = array(
        "css"=>"../bootstrap/css/bootstrap.min.css",
        "js"=>"../bootstrap/js/jquery-1.11.3.min.js",
        );

    include('../main/head.php');
?>
<head>
    <link href="../main/style.css" rel="stylesheet" type="text/css">
    <link href="../main/nav.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/passtest.js"></script>
</head>

<div class ="wrapper">
    <div id ="header_desc">
        <div class="container">
            <div id = "df_name">
                 <a href="../home/" class="company_name">Downtown Fashion</a>
            </div>
            <?php 
                include('../main/header.php');
            ?>
        </div>
    </div>

        <!-- Begin page content -->
    <div id="signin-wrapper">
         <div class="container">
            <div class = "row">
                <div class="col-xs-12 col-sm-6 login">
                    <h4>Returning User</h4>
                    <div class = "signinpadding">
                        <form method="post" action="index.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="text" name="email" id="email" value="Email Address" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                            <input type="text" name="password" id="password" value="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                            <p style="text-align: right;"><i class="fa fa-question-circle"></i> Forgot password?</p>
                            <label><input type="checkbox" id="remember" name="remember"> Remember Me</label>
                            <input type="submit" name="submit" value="Submit"> 
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 newuser">
                    <h4>New Users</h4>
                    <p>Create an account to track your orders, create a wishlist and more.</p>
                    <div id ="createAcount-wrapper">
                        <div id="createAccount-button" onclick="returnCreateAccount()">Create Account</div>
                        <div id ="createAccount" style="display:none">
                            <p class ="required"><span class="error">* required field</span></p>
                            <!-- THIS DOESNT WANNA WORK 

                            <form method="post" action="register.php"> 
                                <input type="text" name="fname" value="First Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                                <span class="error"><?php echo $fnameErr;?></span>
                                <input type="text" name="lname" value="Last Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>                            
                                <span class="error"> <?php echo $lnameErr;?></span>
                                <input type="text" name="email" value="Email Address *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                                <span class="error"> <?php echo $emailErr;?></span>
                                <input type="text" name="password" value="Password *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                                <span class="error"><?php echo $passwordErr;?></span>
                                <input type="text" name="repassword" value="Confirm Password *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                                <span id="confirmMessage"class="error"><?php echo $repasswordErr;?></span>
                                <input type="submit" name="submit" value="Create Account"> 
                          </form>
                            -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('../main/footer.php'); 
?>
