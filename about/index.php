<?php
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../home",
            "Men"=>"../men",
            "Women"=>"../women",
            "Kids"=>"../kids",
            "Accessories"=>"../accessories",
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
                 <a href="/home/" class="company_name">Downtown Fashion</a>
            </div>
            <div class="push"></div>
            <?php 
                include('../main/header.php');
            ?>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <article>
            	<div id = "about">
					
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
