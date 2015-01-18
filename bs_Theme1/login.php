<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top menu -->
<div class="container">
    <div class="row">
        <div class="col-md-12 wow fadeInUp">

            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active" >
                                <a href="index.html">
                                    <i class="fa fa-home"></i><br>Home <span></span>
                                </a>

                            </li>
                            <li>
                                <a href="about.html"><i class="fa fa-user"></i><br>About Me</a>
                            </li>
                            <li>
                                <a href="portfolio.html"><i class="fa fa-camera"></i><br>Photo Gallary</a>
                            </li>
                            <!--drdwn-->
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >
                                    <i class="fa fa-home"></i><br>Sign in <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="registration.php">Registration</a></li>
                                </ul>
                            </li>
                            <!--drdwn-->
                            <li>
                                <a href="contact2.html"><i class="fa fa-envelope"></i><br>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><!---col---->
    </div><!---row-->
</div><!--container--->

<!-- Page Title -->
<div class="page-title-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <i class="fa fa-user"></i>
                <h1>Login/</h1>
                <p>Below you can find more information about me</p>
            </div>
        </div>
    </div>
</div>

<!-- content Text -->

<!---login-->
<section class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <hr class="colorgraph">
            <div class="panel panel-success">
                <form action="" method="post">
                    <fieldset>
                        <legend class="btn-info text-center">Login Form</legend>
                        <div class="form-group">
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control form-inline" placeholder="Username" type="text">
                            </div>
                            <br>
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control form-inline" placeholder="Password" type="password">
                            </div>
                            <br>
                           <!-- <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>-->
                            <div class="checkbox pull-left">
                                <p class="text-center"><a href="registration.php">Don't Have an account, Signup?</a></p>
                            </div>

                            <button class="btn btn-ar btn-info pull-right btn-md" type="submit" title="login">
                                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                Login
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box wow fadeInUp">
                <h4>About Me</h4>
                <div class="footer-box-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    </p>
                    <p><a href="about.html" title="Read more">Read more...</a></p>
                </div>

            </div>
            <div class="col-md-3 footer-box wow fadeInDown">
                <h4>Email Updates</h4>
                <div class="footer-box-text footer-box-text-subscribe">
                    <p>Enter your email and you'll be one of the first to get new updates:</p>
                    <form role="form" action="assets/subscribe.php" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">Email address</label>
                            <input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
                        </div>
                        <button type="submit" class="btn.css" title="Subscribe">Subscribe</button>
                    </form>
                    <p class="success-message"></p>
                    <p class="error-message"></p>
                </div>
            </div>

            <div class="col-md-4 footer-box wow fadeInDown">

                <h4>Contact Me</h4>
                <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> Address: Mirpur,Dhaka</p>
                    <p><i class="fa fa-phone"></i> Phone: 01711111111</p>
                    <p><i class="fa fa-user"></i> Skype: Andia_Agency</p>
                    <p><i class="fa fa-envelope"></i> Email: <a href="">contact@andia.co.bd</a></p>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 wow fadeIn">
                <div class="footer-border"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 footer-copyright wow fadeIn">
                <p>Copyright 2015 ASSFM  - All rights reserved</p>
            </div>
            <div class="col-sm-5 footer-social wow fadeIn">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>

            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/js/jflickrfeed.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/jquery.ui.map.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>




</html>