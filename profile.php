<?php
require 'includes/connect.php';
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<!-- banner -->
<?php
include 'header.php';

$uid = $_SESSION['u_id'];

$userInformationSql = "SELECT * FROM `user` WHERE u_id='$uid'";
$result = $conn->query($userInformationSql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <!-- User Info -->
        <div style="text-align: center;">
            <div class="card" style="margin-top: 54px;border: 2px solid black;padding: 50px;">
                <h1><?php echo $row['u_name']; ?></h1>
                <h4 style="margin-top: 15px;"><?php echo $row['u_phone']; ?></h4>
                <h4 style="margin-top: 05px;"><?php echo $row['u_email']; ?></h4>
                <?php
                if ($row['u_status'] == 0) {
                    ?>
                    <button class="btn btn-success btn-block btn-lg" style="margin-top: 70px; margin-bottom: -30px">Active</button>
                <?php } else { ?>
                    <button class="btn btn-danger btn-block btn-lg" style="margin-top: 70px; margin-bottom: -30px">InActive</button>
                    <script>
                        var timer = setTimeout(function() {
                            window.location='logout.php'
                        }, 1500);
                    </script>
                    <?php
                }
                ?>
                <div style="margin-top: 55px;">
                <a href="checkAppointment.php" class="btn btn-secondary btn-block btn-lg">Appointments</a>
                <a href="checkAdoptions.php" class="btn btn-info btn-block btn-lg">Adoptions</a>
                </div>
            </div>
        </div>
    <?php }
}
?>
<!-- //contact -->
<?php
include 'footer.php';
?>
<!-- modal-about -->
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-spa">
                <img src="images/g2.jpg" class="img-responsive" alt=""/>
                <h4>Consectetur adipiscing elit</h4>
                <p>Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu
                    ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue
                    consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis
                    felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar
                    metus neque, eget porttitor massa vulputate in.<br> Fusce lacus purus, pulvinar ut lacinia id,
                    sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra
                    quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis.
                    Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                    consequatur aut At vero eos </p>
            </div>
        </div>
    </div>
</div>
<!-- //modal-about -->
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
                                    <form action="#" method="post">
                                        <input type="email" class="email" name="Email" placeholder="Email" required=""/>
                                        <input type="password" class="password" name="Password" placeholder="Password"
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
                                        <form action="#" method="post">
                                            <input type="text" name="Username" placeholder="Username" required="">
                                            <input type="email" class="email" name="Email" placeholder="Email"
                                                   required=""/>
                                            <input type="password" class="password" name="Password"
                                                   placeholder="Password" required=""/>
                                            <label class="anim">
                                                <input type="checkbox" class="checkbox">
                                                <span> I accept the terms of use</span>
                                            </label>
                                            <div class="w3ls-submit">
                                                <input class="register" type="submit" value="REGISTER">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- //login-page -->
        </div>
    </div>
</div>
<!-- //modal sign in -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
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