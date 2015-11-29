<?php
    $page_title = "Cart - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../home",
            "Shop"=>"../shop",
            "Men"=>"../shop/men",
            "Women"=>"../shop/women",
            "Kids"=>"../shop/kids",
            "Accessories"=>"../shop/accessories",
            "About"=>"../about",
            "Login"=>"../account/login",
            "Signup"=>"../account/signup",
            "Cart"=>"../cart",
            "Account"=>"../account",
            "Logout"=>"../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../bootstrap/css/bootstrap.min.css",
        "js"=>"../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../../bootstrap/js/bootstrap.min.js",
        );
    session_start();
    include('../main/head.php');
?>
<head>
    <link href="../main/style.css" rel="stylesheet" type="text/css">
    <link href="../main/nav.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
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

    <div id="cart">
        <div class="container">
            <ol class="track-progress" data-steps="4">
              <li>
                <span>Shopping Bag</span>
                <i></i>
              </li>
              <li>
                <span>Shipping/Billing</span>

              </li>
              <li>
                <span>Shipping Method</span>
              </li>
              <li><span>Payment</span>
              <i></i></li>
            </ol>

            <h2>Shopping Cart</h2>
            <hr>
            <?php
                $action = isset($_GET['action']) ? $_GET['action'] : "";
                $name = isset($_GET['name']) ? $_GET['name'] : "";
                 
                if($action=='removed'){
                    echo "<div class='alert alert-info'>";
                        echo "<strong>{$name}</strong> was removed from your cart!";
                    echo "</div>";
                }
                 
                else if($action=='quantity_updated'){
                    echo "<div class='alert alert-info'>";
                        echo "<strong>{$name}</strong> quantity was updated!";
                    echo "</div>";
                }
                 
                if(count($_SESSION['cart_items'])>0){
                 
                    // get the product ids
                    $ids = "";
                    foreach($_SESSION['cart_items'] as $id=>$value){
                        $ids = $ids . $id . ",";
                    }
              
                 
                    // remove the last comma
                    $ids = rtrim($ids, ',');
                 
                    echo $ids;
                }
     
                else{
                    echo "<div class='alert alert-danger'>";
                        echo "<strong>No products found</strong> in your cart!";
                    echo "</div>";
                }
 
            ?>
        </div>
    </div>
</div>

<?php 
    include('../main/footer.php'); 
?>


