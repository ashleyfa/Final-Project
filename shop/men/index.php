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
                <div class="shop-toolbar">
                </div>
            </div>
            <div class = "product">
                <?php
                    require "../../db/connection.php";

                    // Check connection
                   if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    //find out how many rows are in the table
                    $sql = "SELECT COUNT(*) FROM men_product";
                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);       
                    $r = mysqli_fetch_row($result);
                    $numrows = $r[0];

                    //number of rows to show per page
                    $rowsperpage = 10;

                    //find out total papges
                    $totalpages = ceil($numrows/$rowsperpage);

                    //get the current page or set a default
                    if(isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])){
                        //cast var as int
                        $currentpage = (int)$_GET['currentpage'];
                    }
                    else{
                        $currentpage =1;
                    }

                    //if current page is greater than total pages
                    if($currentpage > $totalpages){
                        $currentpage = $totalpages;
                    }

                    if($currentpage < 1){
                        $currentpage = 1;
                    }

                    $offset = ($currentpage - 1) * $rowsperpage;

                    $sql = "SELECT url, name, price, description FROM men_product LIMIT $offset, $rowsperpage";

                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);

                    //while there are rows to be fetch..
                    while($list = mysqli_fetch_assoc($result)){
                        echo "<div class='container'>";
                        echo "<a href='single.html'>";
                        echo "<div class='product_image'>";
                        //echo "<img src='img/suit1.jpg'>";
                        echo "<img src=".$list['url']." class='product_img'>";
                        echo "</div>";
                        echo "<div cla = 'price'>";
                        echo "<div class='cart-left'>";
                        echo "<p class = 'title'>".$list['name']."</p>";
                        echo "<div class='price1'>";
                        echo "<span class='actual'>".$list['price']."</span>";
                        echo "</div></div></div>";
                        echo "</div>";
                    }

                ?>

                <div class="shop-toolbar">
                    <div class="sort">
                        <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                                <option value="">Position</option>
                                <option value="">Name</option>
                                <option value="">Price</option>
                            </select>
                        </div>
                    </div>
                    <div class="pager">   
                        <div class="limiter visible-desktop">
                        <label>Show</label>
                        <select>
                            <option value="" selected="selected">9</option>
                            <option value="">15</option>
                            <option value="">30</option>
                            </select> per page        
                    </div>
                    <ul class="dc_pagination dc_paginationA dc_paginationA06">
                        <li><a href="#" class="previous">Pages</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                </div>
                <?php
                    /* Build the pagination links
                    -------------------------------*/
                    //range of num links to show
                    $range = 6;

                    if($currentpage > 1){
                        echo "<a href='{$_SERVER['PHP_SELF']}?currentpage=1'><< First</a> ";
                        $prevpage = $currentpage - 1;
                        echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Previous</a> ";
                    }

                    for($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++){
                        if(($x > 0) && ($x <= totalpages)){
                            echo "hi";
                            if($x == $currentpage){
                                echo " [<b>$x</b>] ";
                            }
                            else{
                                echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a>" ;
                            }
                        }
                    }

                    if($currentpage != $totalpages){
                        $nextpage = $currentpage + 1;
                        echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>next</a> ";
                        echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>last</a> ";
                    }
                ?>
            </div>

        </div>
    </div>

</div>

<?php 
    include('../../main/footer.php'); 
?>
