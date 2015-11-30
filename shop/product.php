<?php
    $page_title = "Sign Up - Downtown Fashion";
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
    require "../db/connection.php";

    $sql = "SELECT id, url, price, name, description FROM ".$_GET['category']." WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
    $row = mysqli_fetch_assoc($result);

    $category = isset($_GET['category']) ? $_GET['category'] : "";
    $id = isset($_GET['id']) ? $_GET['id'] : "";
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

    <div id="shop-wrapper">
        <div class="container">
            <ol class ="breadcrumb">
                <li><a href=<?php echo $navmenu['Home']?>>Home</a></li>
                <li><a href=<?php echo $navmenu['Shop']?>>Shop</a></li>
                <?php
                    if($_GET['category'] == "men_product"){
                        echo "<li><a href='../shop/men'>Men</a></li>";
                    }
                    else if($_GET['category'] == "women_product"){
                        echo "<li><a href='../shop/women'>Women</a></li>" ;  
                    }
                ?>
                <li class="active"><?php echo $row['name']?></li>
            </ol>
            <div class = "row">
                <div class = "col-sm-5">
                    <?php
                        if($category == "men_product"){
                            echo "<img class='img_view' src = '../shop/men/" . $row['url']."'>";
                        }
                        else if ($category == "women_product"){
                            echo "<img class='img_view' src = '../shop/women/" . $row['url']."'>";
                        }
                        else if($category == "kids_product"){
                            echo "<img class='img_view' src = '../shop/kids/" . $row['url']."'>";
                        }
                    ?>

                </div>
                <div class = "col-sm-7">
                    <p>
                        <h1><?php echo $row['name']?></h1>
                        <p>$<?php echo $row['price']?></p>
                        <p style="color: gray"><?php echo $row['description']?></p>
                        <br>
                    </p>
                    <form method = "POST" action =<?php echo "add_to_cart.php?id={$id}&name={$name}&category={$category}"?>>
                        <p><b>SIZE:</b> </p>
                        <ul class="size-option">
                            <li>
                                <input type="radio" id = "xs" value ="xs" name="size" checked="checked" />
                                <label for="xs">xs</label>
                            </li>
                            <li>
                                <input type="radio" id="sm" value = "sm" name="size" />
                                <label for="sm">small</label>
                            </li>
                            <li>
                                <input type="radio" id="md" value = "md" name="size" />
                                <label for="md">medium</label>
                            </li>
                            <li>
                                <input type="radio" id="lg" value = "lg" name="size" />
                                <label for="lg">large</label>
                            </li>
                        </ul>
                        <br><br><br>
                        <label for="Quantity" class="quantity-selector">Quantity</label>
                        <input type="number" id="Quantity" name="quantity" value="1" min="1" max="3" class="quantity-selector">
                        <br><br><br>
                         <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include('../main/footer.php'); 
?>
