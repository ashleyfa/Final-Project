<?php
    $page_title = "Order History - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home",
            "Shop"=>"../../shop",
            "Men"=>"../../shop/men",
            "Women"=>"../../shop/women",
            "Kids"=>"../../shop/kids",
            "Accessories"=>"../../shop/accessories",
            "About"=>"../../about",
            "About-ICS415"=>"../../about/about-ics415",
            "Login"=>"../../account/login",
            "Signup"=>"../../account/signup",
            "Cart"=>"../../cart",
            "Account"=>"../../account",
            "Logout"=>"../../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../../bootstrap/js/bootstrap.min.js",
        );
    session_start();

    require '../../db/connection.php';

    include('../../main/head.php');
?>
<head>
    <link href="../../main/style.css" rel="stylesheet" type="text/css">
    <link href="../../main/nav.css" rel="stylesheet" type="text/css">
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

    <div id="about">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href=<?php echo $navmenu['Home']?>>Home</a></li>
                <li><a href=<?php echo $navemenu['Account']?>>Account</a></li>
                <li class="active">Order #</li>
            </ol>

            <div class = "items_in_cart">
                <?php
                  //  $sql = "SELECT * FROM order_list WHERE order_num="
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
    include('../../main/footer.php'); 
?>
