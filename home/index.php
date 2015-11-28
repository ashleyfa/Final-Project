    
<?php
    $page_title = "Home - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../home",
            "Shop"=> "../shop",
            "Men"=>"../shop/men",
            "Women"=>"../shop/women",
            "Kids"=>"../shop/kids",
            "Accessories"=>"../shop/accessories",
            "About"=>"../about",
            "Login"=>"../account/login",
            "Signup"=>"../account/signup",
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
                 <a href="../home" class="company_name">Downtown Fashion</a>
            </div>

            <?php 
                include('../main/header.php');
            ?>
        </div>
    </div>
</div>
<div id = "home">
    <div class = "container">
        <div class="row">
            <div class="col-md-12">
                <div class="well homePromo">
                    PROMO
                    
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-sm-4 col-md-4">
                <a href="../shop/men/">
                    <div class="well shopMen">
                        <p>SHOP<span class="bottomText"><b> MENS</b></span></p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="../shop/women/">
                    <div class="well shopWomen">
                        <p>SHOP<span class="bottomText"><b> WOMENS</b></span></p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="../shop/kids/">
                    <div class="well shopKids">
                        <p>SHOP<span class="bottomText"><b> KIDS</b></span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <a href="">
                    <div class="well shopAccesories">
                        <p>SHOP<br><span class="bottomText"><b>ACCESSORIES</b></span></p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="">
                    <div class="well ourstore">
                        <p><span class="bottomText"><b>OUR STORE</b></span></p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="">
                    <div class="well">
                        <p><span class="bottomText"><b>CONTACT</b></span></p>
                    </div>
                </a>
            </div>
         </div>          
    </div>
</div>


<?php 
    include('../main/footer.php'); 
?>
