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
            "About-ICS415"=>"../about/about-ics415",
            "Login"=>"../account/login",
            "Signup"=>"../account/signup",
            "Cart"=>"../cart",
            "Account"=>"../account",
            "Logout"=>"../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../bootstrap/css/bootstrap.min.css",
        "js"=>"../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../bootstrap/js/bootstrap.min.js",
        );

    session_start();
    require '../db/connection.php';

    $tprice = 0;
    $subtotal =0;
    $tax = 0;
    $name = "";                       
    include('../main/head.php');
?>
<head>
    <link href="../main/style.css" rel="stylesheet" type="text/css">
    <link href="../main/nav.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="../js/script.js" type="text/javascript"></script>
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
            
            <div class = "items_in_cart">
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
                ?>
            
                <div class = "row">
                    <div class = "col-sm-8">
                        <div class = "row">

                        <div class="container">
                            <div class = "col-xs-12 col-sm-8 item-cart-header">
                                <?php
                                if(isset($_SESSION['cart_items'])){
                                    echo count($_SESSION['cart_items']); 
                                }
                                else{
                                    echo 0;
                                } 
                                ?> ITEMS <span class = "pull-right">PRICE</span>
                            </div>
                            <?php
                                if(count($_SESSION['cart_items'])>0){
                                 
                                    // get the product ids
                                    foreach($_SESSION['cart_items'] as $product_id=>$value){
                                        $query= "SELECT url, price, name, description FROM ".$value['category']." WHERE product_id = ". $product_id;
                                        $result = mysqli_query($conn, $query) or trigger_error("SQL", E_USER_ERROR);
                                        $row = mysqli_fetch_assoc($result);

                                        echo "<div class = 'col-xs-12 col-sm-8 cart-grid'>";

                                        if($value['category'] == "men_product"){
                                            echo "<img src = '../shop/men/".$row['url']."' style = 'float: left'; width='130px'>";
                                        }
                                        else if($value['category'] == "women_product"){
                                            echo "<img src = '../shop/women/".$row['url']."' style = 'float: left'; width='130px'>";    
                                        }
                                        else if($value['category'] == "women_product"){
                                            echo "<img src = '../shop/women/".$row['url']."' style = 'float: left'; width='130px'>";    
                                        }
                                       
                                        echo "<p>";
                                        echo "<h5 class>".$row['name']."<span class = 'pull-right'>$".$row['price']."</span></h5>";
                                        echo "<br>Price: $".$row['price'];
                                        echo "<br>Size: ".$value['size'];
                                        echo "<br>Qty: ".$value['quantity'];

                                        echo "<br><br>";
                                        echo "<a href='#'>Edit</a> | <a href='remove_from_cart.php?id=".$id."&name=".$row['name']."'>Remove</a>";
                                        echo "</p></div>";
                                        $tprice = $tprice + $row['price'] * $value['quantity'];
                                    }
                                }
                                else{
                                   echo "<div class='col-xs-12 col-sm-8 cart-grid'><h2>Your shopping cart is empty...</h2><p>Time to check out the new collection!</p>";
                                   echo "</div>";
                                }
                 
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class = "col-sm-4 col-xs-12">
                        <div class = "cart-header"><p style="padding-left: 10px;">checkout</p></div>
                        <div class = "checkout-box">
                            <p>Merchandise Total: <span id = "totalprice">$<?php echo $tprice; ?></span>
                                <br>Shipping: <span id = "shipping">FREE</span>
                                <br>Tax: <a href="#" data-toggle="popover" data-trigger="focus" data-content="The appropriate tax or duty will be applied to your order in checkout."><i class="fa fa-question-circle"></i></a> <span id = "tax">$<?php echo $tax; ?></span>
                            </p>
                            <hr>
                            <p>Sub Total: <span id = "sub-total">$<?php $subtotal = $tprice + $tax; echo $subtotal;?></span></p>


                            <form action ="checkout.php?totalprice=<?php echo $subtotal; ?>" method="post">
                                <input type="submit" value="checkout" name="checkout" class="checkout-button">
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


