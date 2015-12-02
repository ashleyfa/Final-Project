<?php
    session_start(); // Start up the php session

    if($_SESSION['Login'] != "YES") { // Checks to see if user is not logged in and send them back to the login.php page.
        header("Location: ../login");
        die();
    }
?>

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
    require '../../db/connection.php';
    include('../../main/head.php');
?>
<head>
    <link href="../../main/style.css" rel="stylesheet" type="text/css">
    <link href="../../main/nav.css" rel="stylesheet" type="text/css">
    <script src="../../script.js" type="text/javascript"></script>
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
            <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
            <hr>
            <div class = "row">
                <div class = "col-sm-12">
                    <h3>Recent Orders</h3>
                    <p>View all orders here.</p>
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
                
                                <?php 
                                    $sql = "SELECT id FROM users WHERE email='". $_SESSION['email']."'";
                                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                                    $row = mysqli_fetch_assoc($result);
                                    $sql = "SELECT order_num, datepurchase, totalprice FROM orders WHERE user_id = '".$row['id']."'";
                                    $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                                    while($list = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$list['order_num']."</td>";
                                        echo "<td>".$list['datepurchase']."</td>";
                                        echo "<td>$".$list['totalprice']."</td>";
                                        echo "<td><a href='view_order.php?order_num=". $list['order_num']."&user_id=". $row['id'] ."'><div class = 'viewBox'>View</div></a></td>";
                                        echo "<tr>";
                                    }
                                ?>
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h3>Account Information</h3>
            <p>Edit your personal information.</p>
            <div class = "row">
                <div class="container">
                    <div class="col-sm-6">
                        <div class = "accountInfo">
                            <?php 
                                $sql = "SELECT * FROM users WHERE email='". $_SESSION['email']."'";
                                $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
                                $row = mysqli_fetch_assoc($result);
                                echo "<p>".$row['first_name']. " ". $row['last_name']."</p>";
                                echo "<p>".$row['email']."</p>";
                            ?>
                            <a href="email.php">Update Email</a> <span><?php echo $_SESSION['emailupdate'] ?></span><br>
                            <a href="#" data-toggle="modal" data-target="#DeleteModal" style="color: red;">Delete Account</a>


                             <form method = "post" action=<?php echo "delete_account.php?email=".$row['email']?>>
                                    <!-- Modal -->
                                <div class="modal fade" id="DeleteModal" role="dialog">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="color: red">WARNING: DELETING ACCOUNT</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>You are about to delete your account, this procedure is irreversible. All of your personal information will no longer be stored and all your order history will disappear as well.</p>
                                            <p>Are you sure you want to delete your account?</p> 
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-danger" >Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class = "col-sm-6">
                        <div class = "accountInfo">
                            something
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php 
    include('../../main/footer.php'); 
?>
