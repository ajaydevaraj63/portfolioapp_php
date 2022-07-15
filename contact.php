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
            <!-- fixed column  -->
            <div class="fixed-column">
                <div class="column-image fl-wrap full-height">
                    <div class="bg" data-bg="images/bg/1.jpg"></div>
                    <div class="overlay"></div>
                </div>
                <div class="bg-title alt"><span>Contacts</span></div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar"></div>
                </div>
            </div>
            <!-- fixed column  end -->
            <!-- column-wrap  -->
            <div class="column-wrap scroll-content">
                <!--=============== content ===============-->	
                <!-- content   -->               
                <div  class="content">
                    <!-- section-->
                    <section  data-scrollax-parent="true" class="dec-sec">
                        <div class="container">
                            <div class="section-title">
                                <h2> Contacts </h2>
                                <p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                            <div class="fl-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <h4>Nulla pariatur esse</h4>
                                            <h3>You can write me on this adress</h3>
                                            <a href="#">yourmail@domain.com</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <h4>Voluptate cillum </h4>
                                            <h3>My mobile phone number   </h3>
                                            <a href="#">+0(111)123456789</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <h4>Suspendisse id neque</h4>
                                            <h3>My office located In  </h3>
                                            <a href="#"> 27th Brooklyn New York, NY 10065</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-social">
                                            <ul >
                                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-box box-map">
                                    <div  id="map-canvas"></div>
                                </div>
                                <!-- contact info -->
                                <h4 class="bold-title">Get in Touch</h4>
                                <div class="fl-wrap">
                                    <!-- contact form -->
                                    <div id="contact-form">
                                        <div id="message"></div>
                                        <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                            <div class="input-wrap"><i class="fa fa-user-plus"></i><input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name  *" ></div>
                                            <div class="input-wrap"><i class="fa fa-envelope"></i><input name="email" type="text" id="email" onClick="this.select()" value="E-mail  *" ></div>
                                            <div class="input-wrap">  <i class="fa fa-phone"></i>  <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>   </div>
                                            <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                            <div class="verify-wrap ">
                                                <span class="verify-text"> How many gnomes were in the story about the "Snow-white" ?</span> 
                                                <div class="input-wrap"><input name="verify" type="text" id="verify" onClick="this.select()" value="0" ></div>
                                            </div>
                                            <button type="submit"  id="submit"   ><span>Send Message </span></button> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">  Contacts</div>
                    </section>
                    <!-- section end -->
                    <!--  to top  -->  
                    <div class="small-sec fl-wrap">
                        <div class="to-top-wrap"><a class="to-top" href="#"> <i class="fa fa-angle-double-up"></i> Back to Top</a></div>
                    </div>
                    <!-- to top end--> 
                </div>
                <!-- content end -->
            </div>
            <!-- column-wrap end -->
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
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>  
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>
</html>