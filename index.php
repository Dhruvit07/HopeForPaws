<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Best Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property=""/>
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- //web-fonts -->
    <style>
        .fade.in {
            opacity: 1;
        }

        .alert-primary {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .alert-dismissable, .alert-dismissible {
            padding-right: 35px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }
    </style>
</head>
<body>
<!-- banner -->
<div class="w3ls-banner jarallax">
    <div class="w3lsbanner-info">
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="agile_header_grid">
                    <div class="header-mdl agileits-logo"><!-- header-two -->
                        <h1><a href="index.php">Hope For Paws</a></h1>
                    </div>
                    <div class="agileits_w3layouts_sign_in">
                        <ul>
                            <?php
                            if (!isset($_SESSION['loggedin'])) {
                                ?>
                                <li><a href="#myModal2" data-toggle="modal" class="play-icon">Login</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="logout.php" class="play-icon">Logout</a></li>
                                <?php
                            }
                            ?>
                            <li>Call us : <span>(1800) 989 7419</span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="header-nav"><!-- header-three -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- top-nav -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php
                            if (isset($_GET['login'])) {
                                echo '
                                <div class="alert alert-primary" style="margin:15px">
                                You Must be Logged in to use this Feature. 
                                </div>';

                            }

                            if (isset($_GET['exist']) && $_GET['exist'] == true) {

                                echo ' <div class="alert alert-primary" style="margin-top:10px">  Email Already Exist! </div>';
                            }


                            if (isset($_GET['error']) && isset($_SESSION['error'])) {
                                echo ' <div class="alert alert-primary"  style="margin-top:10px"> ' . $_SESSION['error'] . ' </div>';
                                unset($_SESSION['error']);
                            }
                            ?>
                            <ul class="nav navbar-nav cl-effect-16">
                                <li><a href="index.php" class="x`   active" data-hover="Home">Home</a></li>
                                <li><a href="about.php" data-hover="About">About</a></li>
                                <!--                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
                                <!--                                       aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>-->
                                <!--                                    <ul class="dropdown-menu">-->
                                <!--                                        <li><a href="icons.php" data-hover="Web Icons">Web Icons</a></li>-->
                                <!--                                        <li><a href="codes.php" data-hover="Short Codes">Short Codes</a></li>-->
                                <!--                                    </ul>-->
                                </li>
                                <?php
                                if (isset($_SESSION['loggedin'])) {
                                    ?>
                                    <li><a href="product.php" data-hover="E-Store">E-Store</a></li>
                                    <li><a href="adoption.php" data-hover="Adoption">Adoption</a></li>
                                    <li><a href="cart.php" data-hover="Cart">Cart</a></li>

                                    <?php
                                }
                                ?>
                                <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- //header -->
        <!-- banner-text -->

        <div class="banner-text agileinfo">

            <div class="container">

                <div class="agile_banner_info">
                    <div class="agile_banner_info1">
                        <h6>What we offer?</h6>
                        <div id="typed-strings" class="agileits_w3layouts_strings">
                            <p>Welcome to<i> Hope For Paws</i></p>
                            <p><i>Get You</i> Best Help</p>
                            <p>Buy A Gift For<i> Your Love</i></p>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="col-md-4 bnr-agileitsgrids">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Free Consultation</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 bnr-agileitsgrids w3grid1">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Certified Products</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 bnr-agileitsgrids w3grid2">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Free Helpline</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="col-md-6 w3ls_welcome_right">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agileits_w3layouts_welcome_grid">
                            <img src="images/g1.jpg" alt=" " class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_welcome_grid">
                            <img src="images/g2.jpg" alt=" " class="img-responsive"/>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_welcome_grid">
                            <img src="images/g3.jpg" alt=" " class="img-responsive"/>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 w3ls_welcome_left">
            <div class="w3ls_welcome_right1">
                <h3 class="agileits-title">About Us</h3>
                <h6>Lorem ipsum dolor <span> Consectetur </span> sit amet adipisicing elit. </h6>
                <p>Quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                    consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <div class="w3l_more">
                    <a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal"
                       data-target="#myModal">
                        <span>L</span><span>e</span><span>a</span><span>n</span>
                        <span>m</span><span>o</span><span>r</span><span>e</span>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->

<!-- //services -->
<!-- blog-bottom -->
<div class="blog-bottom">
    <div class="container">
        <div class="col-sm-5 w3_agile_blog_bottom_left">
            <img src="images/s1.jpg" alt=" " class="img-responsive"/>
        </div>
        <div class="col-sm-7 w3_agile_blog_bottom_right">
            <h5>Best Pets</h5>
            <h3>24/7 Customer Service Support</h3>
            <p>Pellentesque accumsan cursus dui, sodales blandit urna sodales vitae.
                Maecenas placerat eget mi vitae euismod. Duis aliquam efficitur mi,
                et eleifend velit.</p>
            <div class="w3l_more">
                <a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal"
                   data-target="#myModal">
                    <span>L</span><span>e</span><span>a</span><span>n</span>
                    <span>m</span><span>o</span><span>r</span><span>e</span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //blog-bottom -->
<?php
include 'footer.php';
?>
<!-- modal sign in  -->
<div class="modal bnr-modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login-page "><!-- login-page -->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0"><span>Login</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1"><span>Register</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="agileits-login">
                                    <form action="auth/login_process.php" method="post">
                                        <div class="form-field">
                                            <input type="email" class="email" name="email" placeholder="Email"
                                                   required=""/>
                                            <small></small>
                                        </div>
                                        <input type="password" class="password" name="password" placeholder="Password"
                                               required=""/>
                                        <div class="wthree-text">
                                            <ul>
                                                <li>
                                                    <label class="anim">
                                                        <input type="checkbox" class="checkbox">
                                                        <span> Remember me ?</span>
                                                    </label>
                                                </li>
                                                <li><a href="#">Forgot password?</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="w3ls-submit">
                                            <input type="submit" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="login-top sign-top">
                                    <div class="agileits-login">
                                        <form action="auth/registration_process.php" id="signup" method="post">
                                            <div class="form-field">
                                                <input type="text" name="username" class="username" id="username"
                                                       placeholder="Full Name*" required="">
                                                <small></small>
                                            </div>
                                            <div class="form-field">
                                                <input type="text" class="phone" id="phone" name="phone"
                                                       placeholder="Phone Number*"
                                                       required=""/>
                                                <small></small>
                                            </div>
                                            <div class="form-field">
                                                <input type="email" class="email" id="email" name="email"
                                                       placeholder="Email*"
                                                       required=""/>
                                                <small></small>
                                            </div>
                                            <div class="form-field">
                                                <input type="password" class="password" id="password" name="password"
                                                       placeholder="Password*" required=""/>
                                                <small></small>
                                            </div>
                                            <div class="form-field">
                                                <input type="password" class="confirm-password" id="confirm-password"
                                                       name="confirm-password"
                                                       placeholder="Password*" required=""/>
                                                <small></small>
                                            </div>

                                            <div class="w3ls-submit">
                                                <input class="register" id="register" type="submit" value="register">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            --> <!-- //login-page -->
            <!--    </div>
            </div>
            </div>
            <!-- //modal sign in -->
            <!-- js -->
            <script src="js/jquery-2.2.3.min.js"></script>
            <!-- //js -->
            <!-- jarallax -->
            <script src="js/SmoothScroll.min.js"></script>
            <script src="js/jarallax.js"></script>
            <script type="text/javascript">
                /* init Jarallax */
                $('.jarallax').jarallax({
                    speed: 0.5,
                    imgWidth: 1366,
                    imgHeight: 768
                })
            </script>
            <!-- //jarallax -->
            <!-- ResponsiveTabs js -->
            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
            </script>
            <!-- //ResponsiveTabs js -->
            <!-- banner-type-text -->
            <script src="js/typed.js" type="text/javascript"></script>
            <script>
                $(function () {

                    $("#typed").typed({
                        // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
                        stringsElement: $('#typed-strings'),
                        typeSpeed: 30,
                        backDelay: 700,
                        loop: true,
                        contentType: 'html', // or text
                        // defaults to false for infinite loop
                        loopCount: false,
                        callback: function () {
                            foo();
                        },
                        resetCallback: function () {
                            newTyped();
                        }
                    });

                    $(".reset").click(function () {
                        $("#typed").typed('reset');
                    });

                });

                function newTyped() { /* A new typed object */
                }

                function foo() {
                    console.log("Callback");
                }
            </script>
            <!-- //banner-type-text -->
            <!-- flexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
            <!-- start-smooth-scrolling -->
            <script type="text/javascript" src="js/move-top.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $(".scroll").click(function (event) {
                        event.preventDefault();

                        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                    });
                });
            </script>
            <!-- //end-smooth-scrolling -->
            <!-- smooth-scrolling-of-move-up -->
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };
                    */

                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <!-- //smooth-scrolling-of-move-up -->
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/bootstrap.js"></script>

</body>
</html>