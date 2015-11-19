<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downtown Fashion</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="nav.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <header id ="header_desc">
        <div class="container">
        <p class="company_name">Downtown Fashion</p>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo Here</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/home/">Home</a></li>
                        <li><a href="/shop/">Shop</a></li>
                        <li><a href="/about/">About Us</a></li>
                        <li><a href="/contact/">Contact</a></li>

                        <li><a href="signup">Sign Up</a></li>
                        <li><a href="signup">Login</a></li>
                    </ul>
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a href="cart">Cart(<span id="cart_count"></span>)</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        </div>
    </header>

    <section id="home" data-type="background" data-speed="10">
        <div class="container-fluid">
            <article>
                <div id="home2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well">
                                <p>Promo</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>MENS</b></span></p>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>WOMENS</b></span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>ACCESSORIES</b></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>OUR STORE</b></span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>STORE LOCATION</b></span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="well">
                                    <p>SHOP<br><span class="bottomText"><b>CONTACT</b></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <!-- Bootstrap core Javascript
    =================================================== ->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>