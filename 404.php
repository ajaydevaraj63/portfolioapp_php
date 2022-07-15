<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Cooper - Creative  Responsive Personal  Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <link type="text/css" rel="stylesheet" href="css/yourstyle.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--================= loader ================-->
        <div class="loader-holder">
            <div class="loader-inner loader-vis">
                <div class="loader"></div>
            </div>
        </div>
        <!--================= loader end ================-->
        <!--================= main start ================-->
        <div id="main">
            <!--================= Header ================-->
            <header class="main-header">
                <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
                <!-- info-button -->
                <div class="nav-button" id="open-button">
                    <span class="menu-global menu-top"></span>
                    <span class="menu-global menu-middle"></span>
                    <span class="menu-global menu-bottom"></span>
                </div>
                <!-- info-button end-->
                <div class="show-share isShare"><img src="images/share.png" alt=""></div>
            </header>
            <!-- End header -->
            <!--================= menu ================-->
            <?php require_once 'php/menu.php'?>

            <!--menu end-->
            <!-- Hero section   -->
            <div class="hero-wrap fl-wrap full-height">
                 <div class="bg"  data-bg="images/bg/1.jpg"></div>
                 <div class="overlay"></div>
                 <div class="error-wrap alt">
                     <h2>404</h2>
                     <p> The Page you were looking for, couldn't be found.</p>
                     <a href="index.html" class="btn hide-icon"  ><i class="fa fa-home"></i><span>Back to Home</span></a>                         
                 </div>           
            </div>
            <!-- Hero section   end -->
            <!-- footer-->
            <footer class="main-footer">
                <a href="contact.html" class="mail-link"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <!-- header-social-->
                <div class="footer-social">
                    <ul >
                        <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <!-- header-social end-->           
                <div class="copyright">&#169; Cooper 2017 .  All rights reserved.</div>
            </footer>
            <!-- footer end -->
            <!-- Share container  -->
            <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
            <!-- Share container  end-->
        </div>

        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>