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
          
            <!--menu end-->
            <!-- column-wrap  -->
            <div class="content no-bg fscon">
                <!-- section-->
                <section   class="no-padding">
                    <div class="fixed-filter">
                        <div class="filter-button">Filter</div>
                        <div class="folio-counter">
                            <div class="num-album"></div>
                            <div class="all-album"></div>
                        </div>
                        <div class="gallery-filters">
                            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
                            <a href="#" class="gallery-filter" data-filter=".web">Web Design</a>
                            <a href="#" class="gallery-filter" data-filter=".photography">Photo</a>
                            <a href="#" class="gallery-filter" data-filter=".branding">Branding</a>
                            <a href="#" class="gallery-filter" data-filter=".uides">Ui Design</a>
                        </div>
                    </div>
                    <!-- portfolio start -->
                  
                    <?php
// Include the database configuration file

$db = mysqli_connect("localhost", "root", "", "imageuploaddb");

// Get images from the database
$query = $db->query("SELECT * FROM image WHERE ID=67");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL1 = 'image/'.$row["filename"];
        $imageURL2 = 'image/'.$row["filename2"];
        $imageURL3 = 'image/'.$row["filename3"];
        $imageURL4 = 'image/'.$row["filename4"];
        $imageURL5= 'image/'.$row["filename5"];
        $imageURL6 = 'image/'.$row["filename6"];
        $title=$row["title"];
       
?>


                                <!-- portfolio start -->
                                <div class="gallery-items  spad lightgallery">
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item vis-det folio-img fl-wrap">
                                       
                                            <img  src="<?php echo $imageURL1; ?>"    alt="">
                                            <a data-src="<?php echo $title; ?>" class="popgal"><i class="fa fa-search"></i></a>
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
    
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>   



                    <!-- portfolio end -->
                </section>
                <!-- section end -->
            </div>
            <!-- content end -->
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