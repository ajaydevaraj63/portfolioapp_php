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
         <?php include 'php/header.php'?>
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
                <div class="bg-title alt"><span>Journal</span></div>
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
                                <h2>Journal</h2>
                                <p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                            <div class="searh-holder fl-wrap">
                                <div class="searh-inner">
                                    <form action="#">
                                        <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                        <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!-- post-->
                            <article class="post">
                                <div class="post-media">
                                    <div class="single-slider-holder fl-wrap lightgallery">
                                        <div class="single-slider fl-wrap" data-loppsli="0">
                                            <div class="item">
                                                <img  src="images/folio/1.jpg"  class="respimg"   alt="">
                                                <a data-src="images/folio/1.jpg" class="popup-image slider-zoom">
                                                <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <img  src="images/folio/1.jpg"  class="respimg"   alt="">
                                                <a data-src="images/folio/1.jpg" class="popup-image slider-zoom">
                                                <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <img  src="images/folio/1.jpg"  class="respimg"   alt="">
                                                <a data-src="images/folio/1.jpg" class="popup-image slider-zoom">
                                                <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <img  src="images/folio/1.jpg"  class="respimg"   alt="">
                                                <a data-src="images/folio/1.jpg" class="popup-image slider-zoom">
                                                <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!--  navigation -->
                                        <div class="customNavigation gals">
                                            <a class="prev-slide transition"> <i class="fa fa-angle-left"></i></a>
                                            <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--  navigation end-->
                                    </div>
                                </div>
                                <div class="post-item fl-wrap">
                                    <h4><a href="blog-single.html">Integer Sagittis</a></h4>
                                    <ul class="post-meta">
                                        <li>02 Frb</li>
                                        <li>22 com</li>
                                        <li><i class="fa fa-heart-o"></i> 151</li>
                                        <li>
                                            <h5>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h5>
                                        </li>
                                    </ul>
                                    <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nisl imperdiet at molestie purus porta...</p>
                                    <a href="blog-single" class="btn hide-icon"><i class="fa fa-eye"></i><span>Continue reading</span></a> 
                                    <ul class="post-tags">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Photo</a></li>
                                    </ul>
                                    <div class="artcicle-icon"><i class="fa fa-picture-o"></i></div>
                                </div>
                            </article>
                            <!-- post-->
                            <article class="post">
                                <div class="post-media">
                                    <a href="blog-single.html"><img  src="images/folio/1.jpg"  class="respimg"   alt=""></a>
                                </div>
                                <div class="post-item fl-wrap">
                                    <h4><a href="blog-single.html">Video in Web Design</a></h4>
                                    <ul class="post-meta">
                                        <li>02 Frb</li>
                                        <li>22 com</li>
                                        <li><i class="fa fa-heart-o"></i> 151</li>
                                        <li>
                                            <h5>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h5>
                                        </li>
                                    </ul>
                                    <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nisl imperdiet at molestie purus porta...</p>
                                    <a href="blog-single" class="btn hide-icon"><i class="fa fa-eye"></i><span>Continue reading</span></a> 
                                    <ul class="post-tags">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Photo</a></li>
                                    </ul>
                                    <div class="artcicle-icon"><i class="fa fa-picture-o"></i></div>
                                </div>
                            </article>
                            <!-- post end -->
                            <!-- post-->
                            <article class="post">
                                <div class="post-media">
                                    <a href="blog-single.html"><img  src="images/folio/1.jpg"  class="respimg"   alt=""></a>
                                </div>
                                <div class="post-item fl-wrap">
                                    <h4><a href="blog-single.html">In hac habitasse platea</a></h4>
                                    <ul class="post-meta">
                                        <li>02 Frb</li>
                                        <li>22 com</li>
                                        <li><i class="fa fa-heart-o"></i> 151</li>
                                        <li>
                                            <h5>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h5>
                                        </li>
                                    </ul>
                                    <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nisl imperdiet at molestie purus porta...</p>
                                    <a href="blog-single" class="btn hide-icon"><i class="fa fa-eye"></i><span>Continue reading</span></a> 
                                    <ul class="post-tags">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Photo</a></li>
                                    </ul>
                                    <div class="artcicle-icon"><i class="fa fa-picture-o"></i></div>
                                </div>
                            </article>
                            <!-- post end -->
                            <!-- post-->
                            <article class="post">
                                <div class="post-item fl-wrap">
                                    <h4><a href="blog-single.html">A Classic and Effective Blog Design</a></h4>
                                    <ul class="post-meta">
                                        <li>02 Frb</li>
                                        <li>22 com</li>
                                        <li><i class="fa fa-heart-o"></i> 151</li>
                                        <li>
                                            <h5>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h5>
                                        </li>
                                    </ul>
                                    <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nisl imperdiet at molestie purus porta...</p>
                                    <a href="blog-single" class="btn hide-icon"><i class="fa fa-eye"></i><span>Continue reading</span></a> 
                                    <ul class="post-tags">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Photo</a></li>
                                    </ul>
                                    <div class="artcicle-icon"><i class="fa fa-quote-right"></i></div>
                                </div>
                            </article>
                            <!-- post end -->
                            <!-- post-->
                            <article class="post">
                                <div class="post-media">
                                    <a href="blog-single.html"><img  src="images/folio/1.jpg"  class="respimg"   alt=""></a>
                                </div>
                                <div class="post-item fl-wrap">
                                    <h4><a href="blog-single.html">A Classic and Effective Blog Design</a></h4>
                                    <ul class="post-meta">
                                        <li>02 Frb</li>
                                        <li>22 com</li>
                                        <li><i class="fa fa-heart-o"></i> 151</li>
                                        <li>
                                            <h5>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h5>
                                        </li>
                                    </ul>
                                    <p>Etiam in nulla arcu, ut vehicula velit. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nisl imperdiet at molestie purus porta...</p>
                                    <a href="blog-single" class="btn hide-icon"><i class="fa fa-eye"></i><span>Continue reading</span></a> 
                                    <ul class="post-tags">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Photo</a></li>
                                    </ul>
                                    <div class="artcicle-icon"><i class="fa fa-picture-o"></i></div>
                                </div>
                            </article>
                            <!-- post end -->
                            <!-- pagination-->
                            <div class="pagination">
                                <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="blog-page transition">1</a>
                                <a href="#" class="blog-page current-page transition">2</a>
                                <a href="#" class="blog-page transition">3</a>
                                <a href="#" class="blog-page transition">4</a>
                                <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">Project Title </div>
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
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>