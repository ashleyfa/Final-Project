<?php
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home/",
            "Shop"=>"../../shop/",
            "Men"=>"../men",
            "Women"=>"../women",
            "Kids"=>"../kids",
            "Accessories"=>"../accessories",
            "About"=>"../../about",
            "Login"=>"../../account/login",
            "Signup"=>"../../account/signup",
            "Cart"=>"../../cart",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        );

    include('../../main/head.php');
?>
<head>
    <link href="../../main/style.css" rel="stylesheet" type="text/css">
    <link href="../../main/nav.css" rel="stylesheet" type="text/css">
    <link href="../../shop/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../js/script.js"></script>
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

    <div id="shop">
        <div class="container">

            <ol class ="breadcrumb">
                <li><a href=<?php echo $navmenu['Home']?>>Home</a></li>
                <li><a href=<?php echo $navmenu['Shop']?>>Shop</a></li>
                <li class="active">Mens</li>
            </ol>
			<h2>Men's</h2>
                <?php
                    require "../../db/connection.php";

                    //count # of rows in table
                    $sql = "SELECT COUNT(*) FROM men_product";
                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                    $row = mysqli_fetch_row($result);
                    $numrows = $row[0];

                    $rowLimit = 16;
                    $totalpages = ceil($numrows / $rowLimit);

                    if(isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])){
                        $currentpage = (int) $_GET['currentpage'];
                    } 
                    else{
                        $currentpage = 1;
                    }      

                    if($currentpage > $totalpages){
                        $currentpage = $totalpages;
                    }

                    if($currentpage < 1){
                        $currentpage = 1;
                    }

                    $offset = ($currentpage - 1) * rowLimit;
                ?>
        <ul class = "product-grid">
                <?php
                    /* grab items from table
                    -------------------------------*/
                    $sql = "SELECT url, name, price, description FROM men_product LIMIT $offset, $rowLimit";
                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);

                    //WHILE LOOP HERE
                    //while there are rows to be fetch..
                    while($list = mysqli_fetch_assoc($result)){
                        echo "<li>";
                        echo "<div class='imgHover'>";
                        echo "<div class='hover'>";
                        echo "<a href='#'>Quick View</a></div>";
                        echo "<a href='#'><img class = 'product_img' src=".$list['url']."></a>";
                        echo "<p>".$list['name']."<br>".$list['price']."</p></div>";
                        echo "</li>";
                    }


                ?>
            </ul>
            <div class = "shop-toolbar">
                <ul class = "pagination">
                    <?php
                        /* BUILD PAGINATION
                        -------------------------------*/
                        $rangeOfLinks = 3;
                        if ($currentpage > 1) {
                           echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=1'>First</a></li> ";
                           $prevpage = $currentpage - 1;
                           echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Previous</a></li> ";
                        }                    
                        for ($x = ($currentpage - $rangeOfLinks); $x < (($currentpage + $rangeOfLinks) + 1); $x++) {    
                           if (($x > 0) && ($x <= $totalpages)) {
                              if ($x == $currentpage) {
                                 echo " <li class='active'><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";     
                              } else {
                                 echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";
                              } 
                            } 
                        }         
                        if ($currentpage != $totalpages) {
                           $nextpage = $currentpage + 1;
                           echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>Next</a></li> ";
                           echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Last</a></li> ";
                        } 
                    ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php 
    include('../../main/footer.php'); 
?>
