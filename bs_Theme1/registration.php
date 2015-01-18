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
                            <li  class="dropdown active" >
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
</div><!--container-->
<!-- Page Title -->
<div class="page-title-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <i class="fa fa-user"></i>
                <h1>Registration /</h1>

            </div>
        </div>
    </div>
</div>

<!-- content Text -->
<!---reg---->
<section class="container">
    <div class="col-md-5 col-md-offset-3">
        <hr class="colorgraph">
        <form method="POST" action="" class="form-signin">
            <fieldset>
                <legend class="btn-info text-center">Registration Form</legend>

               <!-- <div class="form-group">
                    <label class="form-group form-inline">First Name: </label>
                    <input type="text" class="form-group form-inline" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group text-center">
                    <label class="form-group form-inline">Last Name: </label>
                    <input type="text" class="form-group form-inline" placeholder="Last Name" name="Lastname">
                </div>-->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="First Name" name="firstname" type="text">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Last Name" name="lastname" type="text">
                        </div>
                    </div>
                </div>

                <input class="form-control" placeholder="E-mail" name="email" type="email"><br>
                <input class="form-control" placeholder="Username" name="username" type="text"><br>
                <input class="form-control" placeholder="Password" name="password" value="" type="password"><br>

                <div class="form-group form-inline">
                    <label>Birth Date:</label>
                    <select name="dobyear">
                        <option value="1" selected="selected">--Year--</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                    </select>
                    <select name="dobmonth">
                        <option value="0" selected="selected">--Month--</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                    </select>
                    <select name="dobday">
                        <option value="0" selected="selected">--Day--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group form-inline">
                    <label class="form-group form-inline">Gender: </label>
                    <input class="form-group from-inline" value="Male" id="male" name="gender" type="radio">
                    <label class="form-group form-inline">Male</label>
                    <input class="form-group from-inline" value="Female" id="Female" name="gender" type="radio">
                    <label class="form-group form-inline">Female</label>
                </div><br>

                <p><u><h5>Hobby</h5></u></p>
                <div class="form-group form-inline">
                    <input type="checkbox" name="hobby[]" value="Reading Book"> Reading Book<br />
                    <input type="checkbox" name="hobby[]" value="Travelling"> Travelling<br />
                    <input type="checkbox" name="hobby[]" value="Programming"> Programming<br />
                    <input type="checkbox" name="hobby[]" value="Games"> Games<br />
                </div><br>


                <p><u><h5>Cities</h5></u></p>
                <div class="form-group form-inline">
                    <select name="cities[]" multiple="multiple">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Jshore">Jshore</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Borishal">Borishal</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Narayangonj">Narayangonj</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Kagrachori">Kagrachori</option>
                        <option value="Jorachori">Jorachori</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Bbaria">Bbaria</option>
                    </select>
                </div>

                <input class="form-group form-inline" type="hidden" name="created" />
                <input class="form-group form-inline" type="hidden" name="modified" />

                <div class="checkbox pull-left">
                    <p class="text-center"><a href="login.php">Already have an account?</a></p>
                </div>

                <button class="btn btn-ar btn-primary pull-right btn-md" type="submit" title="register">
                    <span aria-hidden="true" class="glyphicon glyphicon-ok-sign"></span>
                    Register
                </button>
                <div class="clearfix"></div>
            </fieldset>
        </form>
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
                        look at my websit and think . you r in right place
                    </p>
                    <p><a href="about.html" title="read more">Read more...</a></p>
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
                        <button type="submit" class="btn.css" title="subscribe">Subscribe</button>
                    </form>
                    <p class="success-message"></p>
                    <p class="error-message"></p>
                </div>
            </div>

            <div class="col-md-4 footer-box wow fadeInDown">

                <h4>Contact Me</h4>
                <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> Address: Mirpur,Dhaka</p>
                    <p><i class="fa fa-phone"></i> Phone: 02-9000000</p>
                    <p><i class="fa fa-envelope"></i> Email: <a href="">sai@gmail.com</a></p>
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
                <p>Copyright 2015 sai - All rights reserved</p>
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