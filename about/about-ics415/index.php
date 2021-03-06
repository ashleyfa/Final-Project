<?php
    $page_title = "About ICS415 - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home",
            "Shop"=>"../../shop",
            "Men"=>"../../shop/men",
            "Women"=>"../../shop/women",
            "Kids"=>"../../shop/kids",
            "Accessories"=>"../../shop/accessories",
            "About"=>"../../about",
            "About-ics415"=>"../../about/about-ics415",
            "Login"=>"../../account/login",
            "Signup"=>"../../account/signup",
            "Account"=>"../../account",
            "Cart"=>"../../cart",
            "Logout"=>"../../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../../bootstrap/js/bootstrap.min.js",
        );
    session_start();

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
                <li><a href=<?php echo $navmenu['About']?>>About</a></li>
                <li class="active">About ICS 415</li>
            </ol>
            <h1>About</h1>
            <p>Technology we used in the web site</p>
            <hr style="color: #000">
            <h3>Bootstrap:</h3>
            <ul>
                <li></li>
            </ul>
            <h3>Cascading Style Sheets (CSS):</h3>
            <ul>
                <li></li>
            </ul>
            <h3>PHP/mySQL:</h3>
            <ul>
                <li></li>
            </ul>

            <h3>Javascript:</h3>
            <ul>
                <li></li>
            </ul>

            <h3>jQuery</h3>
            <ul>
                <li></li>
            </ul>
        </div>
    </div>
</div>

<?php 
    include('../../main/footer.php'); 
?>
