<div class ="navbarHead">
        <nav class="navbar navbar-default navbar-static">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=<?php echo $navmenu['Home']?>>Logo Here</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=<?php echo $navmenu['Home']?>> Home</a></li>
                        <li class="dropdown">
                          <a href=<?php echo $navmenu['Shop']?>>Shop
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href=<?php echo $navmenu['Men']?>>Men</a></li>
                            <li><a href=<?php echo $navmenu['Women']?>>Women</a></li>
                            <li><a href=<?php echo $navmenu['Kids']?>>Kids</a></li> 
                            <li><a href=<?php echo $navmenu['Accessories']?>>Accessories</a></li>
                          </ul>
                        </li>
                        <li><a href=<?php echo $navmenu['About']?>>About Us</a></li>
                        <?php
                            if($_SESSION['Login'] != "YES") { // Checks to see if user is not logged in and send them back to the login.php page.
                                echo "<li><a href=".$navmenu['Login'].">Login</a></li>";
                                echo "<li><a href=".$navmenu['Signup'].">Register</a></li>";
                            }
                            else{
                                echo "<li><a href=".$navmenu['Account'].">Account</a></li>";
                                echo "<li><a href=".$navmenu['Logout'].">Log out </a></li>";
                            }
                        ?>
                        <li><a href=<?php echo $navmenu['Cart']?>>Cart(<?php echo count($_SESSION['cart_items']); ?>)</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
    
