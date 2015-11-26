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
                        <li><a href=<?php echo $navmenu['Signup']?>>Sign In / Join Us</a></li>
                        <li><a href=<?php echo $navmenu['Cart']?>>Cart(<span id="cart_count"></span>)</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
    