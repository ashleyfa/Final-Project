<?php
    $page_title = "Sign Up - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home/",
            "Shop"=>"../../shop",
            "Men"=>"../men",
            "Women"=>"../women",
            "Kids"=>"../kids",
            "Accessories"=>"../accessories",
            "About"=>"../../about",
            "Contact"=>"../../contact",
            "Signup"=>"../../signup",
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
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<div class ="wrapper">
    <div id ="header_desc">
        <div class="container">
            <div id = "df_name">
                 <a href="../../home" class="company_name">Downtown Fashion</a>
            </div>
            <div class="push"></div>
            <?php 
                include('../../main/header.php');
            ?>
        </div>
    </div>

    <div id="men">
        <div class="container">
			<h2>Kids's</h2>
                <div class="mens-toolbar">
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
            </div>
            <div class = "product">
                <?php
                    while ($row = mysqli_fetch_row($result)){
                        echo "<div class='container'>";
                        echo "<a href='single.html'>";
                        echo "<div class='product_image'>";
                        echo "<img src='img/picture.png'>";
                        echo "</div>";
                        echo "<div class = 'price'>";
                        echo "<div class='cart-left'>";
                        echo "<p class = 'title'> TITLE </p>";
                        echo "<div class='price1'>";
                        echo "<span class='actual'> $price </span>";
                        echo "</div></div></div>";
                        echo "</div>";
                    }
                ?>
            </div>

        </div>
    </div>

</div>

<?php 
    include('../../main/footer.php'); 
?>
