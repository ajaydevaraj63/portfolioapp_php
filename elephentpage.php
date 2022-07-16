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
$query = $db->query("SELECT * FROM image WHERE ID=71");

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
         
            <!-- End header -->
            <!--================= menu ================-->
            <div class="menu-wrap">
                <div class="menu-inner">
                    <!-- menu logo-->
                    <a href="index.html" class="menu-logo"><img src="images/logo2.png" alt=""></a>
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
          
            <!-- fixed column  end -->
            <!-- column-wrap  -->
            <div class="column-wrap scroll-content">
                <!--=============== content ===============-->	
               
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
                                        <a href="dashboard1.php"><img  src="<?php echo $imageURL2; ?>" alt=""></a>    
                                          >
                                        </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item  ">
                                            <img  src="<?php echo $imageURL3; ?>"    alt="">
                                              </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item ">
                                            <img  src="<?php echo $imageURL4; ?>"    alt="">
                                              </div>

                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                        <div class="box-item  ">
                                            <img  src="<?php echo $imageURL5; ?>"    alt="">
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
                           
                            <!-- page anv end  -->
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