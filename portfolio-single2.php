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

        <?php
// Include the database configuration file

$db = mysqli_connect("localhost", "root", "", "imageuploaddb");

// Get images from the database
$query = $db->query("SELECT * FROM image WHERE title='elephent'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL1 = 'image/'.$row["filename"];
        $imageURL2 = 'image/'.$row["filename2"];
        $imageURL3 = 'image/'.$row["filename3"];
        $imageURL4 = 'image/'.$row["filename4"];
        $imageURL5= 'image/'.$row["filename5"];
        $imageURL6 = 'image/'.$row["filename6"];
        $title=$row["title"];
        $title2=$row["title2"];
        $desc=$row["desc2"];
        $desc2=$row["desc3"];
        $desc3=$row["desc4"];
        $desc4=$row["desc5"];
    }
}
       
?>

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
            <div class="menu-wrap">
                <div class="menu-inner">
                    <!-- menu logo-->
                    <a href="elephentpage.html" class="menu-logo"><img src="images/logo2.png" alt=""></a>
                    <!-- menu logo end -->
                    <div class="hid-men-wrap   alt">
                        <div id="hid-men">
                            <ul class="menu">
                                <li>
                                    <a href="index.php">Home</a>
                                    <!-- level 2-->
                                   
                                    <!-- level 2 end-->
                                </li>
                                <li>
                                    <a href="portfolio-single2.php">photography</a>
                                    <!-- level 2-->
                                  
                                    <!-- level 2 end-->
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                        <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
                    </svg>
                </div>
            </div>
            <!--menu end-->
            <!-- fixed column  -->
            <div class="fixed-column">
                <div class="column-image fl-wrap full-height">
                    <div class="bg" data-bg="images/bg/long/1.jpg"></div>
                    <div class="overlay"></div>
                </div>
                <div class="bg-title alt"><span><?php echo $title2; ?></span></div>
                <div class="progress-bar-wrap">
                    <div class="progress-bar"></div>
                </div>
            </div>
            <!-- fixed column  end -->
            <!-- column-wrap  -->
            <div class="column-wrap scroll-content">
                <!--=============== content ===============-->	
                <!-- content   -->               
                <div  class="content  ">
                    <!-- section-->
                    <section  data-scrollax-parent="true" class="dec-sec">
                        <div class="container">
                            <div class="section-title">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $desc; ?></p>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                            <div class="scroll-nav-holder fl-wrap">
                    <nav class="scroll-nav fl-wrap">
                        
                            <li><a class="scroll-link fbgs" href="#sec2" data-bgscr="<?php echo $imageURL1; ?>" data-bgtex="<?php echo $title2; ?>"><span>animal photography</span></a></li>
                            </ul>
                    </nav>
                </div>
                            <div class="fl-wrap">
                                <!-- portfolio start -->
                                <div class="gallery-items  spad lightgallery">
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item  ">
                                        <a href="dashboard1.php"><img  src="<?php echo $imageURL1; ?>" alt=""></a>    
                                         
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="">
                                        <a href="elephentpage.php"><img  src="<?php echo $imageURL2; ?>" alt=""></a>    
                                          >
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item gallery-item-second">
                                        <div class="grid-item-holder">
                                        <div class="box-item  ">
                                        <a href="elephentpage.php"><img  src="<?php echo $imageURL3; ?>" alt=""></a>    
                                            <a data-src="images/folio/1.jpg" class="popgal"><i class="fa fa-search"></i></a>
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item ">
                                        <a href="elephentpage.php"><img  src="<?php echo $imageURL4; ?>" alt=""></a>    
                                            <a data-src="images/folio/1.jpg" class="popgal"><i class="fa fa-search"></i></a>
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item  ">
                                            <img  src="<?php echo $imageURL6; ?>"    alt=""> <a href="elephentpage.php"><img  src="<?php echo $imageURL2; ?>" alt=""></a>    
                                            <a data-src="images/folio/1.jpg" class="popgal"><i class="fa fa-search"></i></a>
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                              
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                   
                                    <!-- gallery-item end-->
                                </div>
                                <!-- portfolio end -->
                            </div>
                            <div class="fl-wrap abt-wrap mr-top">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="text-title"><?php echo $title2; ?>  <span><?php echo $title; ?></span>  </h3>
                                        <p><?php echo $desc; ?>  </p>
                                        <blockquote>
                                            <p>  <?php echo $desc2; ?> </p>
                                        </blockquote>
                                        <p><?php echo $desc3; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="dec-list">
                                            <li><span>Category </span> : Branding</li>
                                            <li><span>Date </span> : 02.03.2015 </li>
                                            <li><span>Client </span> : Usla Ink</li>
                                            <li><span>Address </span> :   domian.com</li>
                                        </ul>
                                        <a href="#" class="btn hide-icon mr-top" target="_blank"><i class="fa fa-file-pdf-o"></i><span>View Project</span></a> 
                                    </div>
                                </div>
                            </div>
                            <!-- page anv end   -->
                            <div class="page-nav bl-nav">
                                <a class="ajax ppn" href="portfolio-single2.html">
                                    <span class="nav-text">Prev</span>
                                    <div class="tooltip">
                                        <img src="<?php echo $imageURL1; ?>" class="respimg" alt="" title="">
                                        <h5><?php echo $title; ?></h5>
                                    </div>
                                </a>
                                <a class="ajax npn" href="portfolio-single3.html">
                                    <span class="nav-text">Next</span>
                                    <div class="tooltip">
                                        <img src="<?php echo $imageURL3; ?>" class="respimg" alt="" title="">
                                        <h5><?php echo $title; ?></h5>
                                    </div>
                                </a>
                            </div>
                            <!-- page anv end  -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="container">
                            <div class="order-wrap fl-wrap color-bg">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Ready to order your project ?</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="contact.html" class="ord-link">Get In Touch</a>
                                    </div>
                                </div>
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