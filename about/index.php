<?php
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../home",
            "Men"=>"../shop/men",
            "Women"=>"../shop/women",
            "Kids"=>"../shop/kids",
            "Accessories"=>"../shop/accessories",
            "About"=>"../about",
            "Contact"=>"../contact",
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
</head>
<div class ="wrapper">
    <div id ="header_desc">
        <div class="container">
            <div id = "df_name">
                 <a href="..//home/" class="company_name">Downtown Fashion</a>
            </div>
            <?php 
                include('../main/header.php');
            ?>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <div></div> <!-- forgot what this is called-->
            <h1>Our Mission</h1>
            <hr>
            afsfjaskfjakjfkasjfjasjgkasjgaksgjg
        </div>
    </div>
</div>

<?php 
    include('../main/footer.php'); 
?>
