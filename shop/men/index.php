<?php
    $page_title = "Mens - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home/",
            "Shop"=>"../../shop/",
            "Men"=>"../men",
            "Women"=>"../women",
            "Kids"=>"../kids",
            "Accessories"=>"../accessories",
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

    $breadMenu = array(
        "src" => "../../shop/men",
        "title" => "Men",
    );
    session_start();
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
			<h2>Mens</h2>
            <hr>

            <div class = "row">
                <div class = "col-md-2 col-xs-12  col-sm-2 divider">
                    <div class = "menToggle">
                        <a class = "toggle" data-toggle="collapse" data-target="#collapseMen">Men<i class = "fa fa-plus" style="float: right;"></i></a>
                        <div id="collapseMen" class="collapse">
                            <ul>
                                <li> All</li>
                                <li> Jacket </li>
                                <li> Pants </li>
                            </ul>
                        </div>
                    </div>
                    <div class = "womenToggle">
                        <a class = "toggle" data-toggle="collapse" data-target="#collapseWomen">Women<i class = "fa fa-plus" style="float: right;"></i></a>
                        <div id="collapseWomen" class="collapse">
                            <ul>
                                <li> All</li>
                                <li> Jacket </li>
                                <li> Pants </li>
                            </ul>
                        </div>
                    </div>
                    <div class = "kidsToggle">
                        <a class = "toggle" data-toggle="collapse" data-target="#collapseKids">Kids<i class = "fa fa-plus" style="float: right;"></i></a>
                        <div id="collapseKids" class="collapse">
                            <ul>
                                <li> All</li>
                                <li> Jacket </li>
                                <li> Pants </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class ="col-md-10 col-xs-12 col-sm-10">
                    <?php 
                        require '../../db/connection.php';

                        $sql = "SELECT COUNT(*) FROM men_product";
                        $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                        $row = mysqli_fetch_row($result);
                        $numrows = $row[0];
                        $rowlimit = 12;
                        $totalpages = ceil($numrows / $rowlimit);

                        if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
                           $currentpage = (int) $_GET['currentpage'];
                        } else {
                           $currentpage = 1;
                        }

                        if ($currentpage > $totalpages) {
                           $currentpage = $totalpages;
                        } 

                        if ($currentpage < 1) {
                           $currentpage = 1;
                        }

                        $offset = ($currentpage - 1) * $rowlimit;

                        $sql = "SELECT id, name, price, url, description FROM men_product LIMIT $offset, $rowlimit";
                        $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                    ?>

                    <div class = "shop-toolbar">
                        <ul class = "pagination">
                            <?php
                            $range = 3;

                            if ($currentpage > 1) {
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=1'>First</a></li> ";
                               $prevpage = $currentpage - 1;
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Previous</a></li> ";
                            } 

                            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                               if (($x > 0) && ($x <= $totalpages)) {
                                  if ($x == $currentpage) {
                                     echo " <li class = 'active'> <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";
                                  } else {
                                     echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";
                                  } 
                               } 
                            } 
             
                            if ($currentpage != $totalpages) {
                               $nextpage = $currentpage + 1;
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>Next</a></li> ";
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Previous</a></li> ";
                            } 

                            ?>
                        </ul>
                    </div>

                    <div class = "row">
                        <?php
                        while($list = mysqli_fetch_assoc($result)){
                            echo "<div class ='col-sm-4 col-md-3 col-lg-3' >";
                            echo "<div class='thumbnail'>";
                            echo "<div class='imgHover'>";
                            echo "<div class='hover'>";
                            echo "<a data-target='#productModal' data-toggle='modal'><span id ='quickview'>Quick View</span></a></div>";
                            echo "<a href='../../shop/product.php?category=men_product&id=".$list['id']."'><img class = 'product_img' src=".$list['url']."></a></div>";
                            echo "<div class='caption'>";
                            echo "<h5>".$list['name']."<span class = 'pull-right'>$".$list['price']."</span></h5>";
                            echo "</div></div></div>";
                        }
                        ?>
                    </div>

                    <div class = "shop-toolbar">
                        <ul class = "pagination">
                            <?php
                            $range = 3;

                            if ($currentpage > 1) {
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=1'>First</a></li> ";
                               $prevpage = $currentpage - 1;
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Previous</a></li> ";
                            } 

                            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                               if (($x > 0) && ($x <= $totalpages)) {
                                  if ($x == $currentpage) {
                                     echo " <li class = 'active'> <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";
                                  } else {
                                     echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li> ";
                                  } 
                               } 
                            } 
             
                            if ($currentpage != $totalpages) {
                               $nextpage = $currentpage + 1;
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>Next</a></li> ";
                               echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Previous</a></li> ";
                            } 

                            ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include('../../main/footer.php'); 
?>
