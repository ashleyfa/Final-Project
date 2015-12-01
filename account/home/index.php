<?php
    $page_title = "Account - Downtown Fashion";
    $navmenu = array(
            "Home"=> "../../home",
            "Shop"=>"../../shop",
            "Men"=>"../../shop/men",
            "Women"=>"../../shop/women",
            "Kids"=>"../../shop/kids",
            "Accessories"=>"../../shop/accessories",
            "About"=>"../../about",
            "Login"=>"../../account/login",
            "Signup"=>"../../account/signup",
            "Account"=>"../../account",
            "About-ICS415"=>"../../about/about-ics415",
            "Cart"=>"../../cart",
            "Logout"=>"../../main/logout.php",
        );
    $bootstrapLinks = array(
        "css"=>"../../bootstrap/css/bootstrap.min.css",
        "js"=>"../../bootstrap/js/jquery-1.11.3.min.js",
        "bjs"=>"../../bootstrap/js/bootstrap.min.js",
        );
    session_start();
    require '../../db/connection.php';
    include('../../main/head.php');
?>
<head>
    <link href="../../main/style.css" rel="stylesheet" type="text/css">
    <link href="../../main/nav.css" rel="stylesheet" type="text/css">
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

    <div id="about">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href=<?php echo $navmenu['Home']?>>Home</a></li>
                <li class="active">Account</li>
            </ol>
            <h1 style="text-align: center;">My Account</h1>
             <?php
                if($_SESSION['Login'] != "YES") { // Checks to see if user is not logged in and send them back to the login.php page.
                    header("Location: login.php"); 
                }
                echo "<p style='text-align: center'>Welcome ". ucfirst($_SESSION['firstname']."!"); // Welcomes the user by their first name set to Uppercase First Letter.
                ?>
            From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
            <hr>
            <div class = "row">
                <div class = "col-sm-12">
                    <h3>Recent Orders</h3>
                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- NEED TO MAKE A DATABASE 
                                <?php 
                                /*
                                    $sql = "SELECT id, dateTime, total FROM orders";
                                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                                    while($list = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$list['id']."</td>";
                                        echo "<td>".$list['dateTime']."</td>";
                                        echo "<td>".$list['total']."</td>";
                                        echo "<td><div class = 'viewBox'>View</div></td>";
                                        echo "<tr>";
                                    }*/
                                ?>
                                -->
                              <tr>
                                <td>1</td>
                                <td>November 30, 2015</td>
                                <td>$15.00</td>
                                <td><a href="#"><div class = "viewBox">View</div></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <h3>Account Information</h3>
                <div class = "row">
                    <div class="container">
                        <div class="col-sm-5 accountInfo">
                        something
                        </div>
                        <div class ="col-sm-5 col-sm-offset-1 addressInfo">
                            something
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
    include('../../main/footer.php'); 
?>
