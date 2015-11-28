<?php
    $page_title = "Downtown Fashion";
    $navmenu = array(
            "Home"=> "home",
            "Shop"=>"shop",
            "Men"=>"shop/men",
            "Women"=>"shop/women",
            "Kids"=>"shop/kids",
            "Accessories"=>"shop/accessories",
            "About"=>"about",
            "Login"=>"account/login"
            "Signup"=>"account/signup",
            "Cart"=>"cart",
            "ShopNow"=>"home",
        );
    $bootstrapLinks = array(
        "css"=>"bootstrap/css/bootstrap.min.css",
        "js"=>"bootstrap/js/jquery-1.11.3.min.js",
        );
    include('main/head.php');
    include('main/header.php');
?>

<head>
     <link href="main/frontpagenav.css" rel="stylesheet" type="text/css">
    <link href="main/frontpage.css" rel="stylesheet" type="text/css"> 
</head>
<section id="main">
    <div class="container-fluid">
        <div clas="mainWrapper">
            <p id = "company_desc"><span id="company_name">Downtown Fashion</span><br>YOUR ONE STOP SHOP FOR ALL YOUR FORMAL WEAR
               <div id ="shop-box-wrapper">
                    <a href=<?php echo $navmenu['ShopNow']?>>
                        <div class="shop-box"><p>SHOP NOW</p></div>
                     </a>
                 </div>
             </p>
       </div>
    </div>
</section>


    <!-- Bootstrap core Javascript
    =================================================== ->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
