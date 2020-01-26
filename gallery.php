<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SAAR</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    
<body>

        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="signin.php">Login/Signup</button>
                        </form></li>
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="index.php">HOME</button>
                        </form></li>
                        <li><a href="#featured">Gallery</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <img src="img/logo1.png" class="static">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="signin.php"><span>Login/Signup </span></button>
                        </form>
                    </li>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="index.php"><span>Home </span></button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>


<div class="page-content">
            <section id="projects" class="content-section">
                <div class="section-heading" style="text-align: center;">
                    <br><br>
                    <h1>Image <em>Gallery</em></h1>
                </div>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <?php
                                $str = file_get_contents('http://saar-server.000webhostapp.com/assets/gallery_sample.json');
                                $json = json_decode($str, true);
                                foreach ($json as $key) {
                                    if($key["status"] == "active")
                            ?>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href='<?php echo $key["image_url"]; ?>' data-lightbox="image"><img src='<?php echo $key["image_url"]; ?>' alt="image " ></a>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                           <!--  <div class="item">
                                <div class="col-md-4">
                                    <a href="img/pus.jpg" data-lightbox="image"><img src="img/pus.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/chem.jpg" data-lightbox="image"><img src="img/chem.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/cs.jpg" data-lightbox="image"><img src="img/cs.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/mech.jpg" data-lightbox="image"><img src="img/mech.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/ee.jpg" data-lightbox="image"><img src="img/ee.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/civ.jpg" data-lightbox="image"><img src="img/civ.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/meeet.jpg" data-lightbox="image"><img src="img/meeet.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/dou.jpg" data-lightbox="image"><img src="img/dou.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/DSC_7823.JPG" data-lightbox="image"><img src="img/DSC_7823.JPG" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/FB_IMG_1547760048483.jpg" data-lightbox="image"><img src="img/FB_IMG_1547760048483.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/FB_IMG_1547760148443.jpg" data-lightbox="image"><img src="img/FB_IMG_1547760148443.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/uts.jpg" data-lightbox="image"><img src="img/uts.jpg" alt="image 1"></a>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </section>
		  
            <section  id="contact" class="content-section">
                <div id="con">
                    <div class="col-md-4">  
                        <div class="teext" style=" display: inline-block;">
                        <h1 style="font-size:24px;">Quick <span>Links</span></h1><br>
                        <p> <a style="text-decoration:none; color:#fff" href="https://www.iitp.ac.in/">IIT Patna</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.iitp.ac.in/alumni/">ITPAA</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Reach Us</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Terms of Use</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Privacy Policy</a>
                        </p>
                        </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="teext" style=" display: inline-block;">
                            <h1  style="font-size:24px;">Social <span> Media</span></h1><br>
                        <p> <a style="text-decoration:none; color:#fff" href="https://www.facebook.com/saar.iitp/"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i>Facebook</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.instagram.com/saar.iitp"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>Instagram</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.linkedin.com/company/saar-iitp"><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>LinkedIn</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.twitter.com/saar_iitp"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>Twitter</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.youtube.com/channel/UCoAb1YggffbfgVxQyXaZB-g"><i class="fa fa-youtube" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>Youtube</a></p>            
                        </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="teext" style=" display: inline-block;">
                            <h1 style="font-size:24px;">Contact <span> Us</span></h1><br>
                            <p> Office of A Dean Resource<br>
                            Administrative Building, IIT Patna<br><br>
                            Prof. In-charge:<br>
                            Dr. Anirban Chowdhary<br>
                            Email - pic_alumni@iitp.ac.in<br><br>
                            General Secretary:<br>
                            Vivek Garg<br>
                            Email - vivek.ch17@iitp.ac.in</p>            
                        </div>
                    </div>
                </div>
            </section>

    <section class="footer" style="background: #232323;">
        <p>|| Copyright || &copy; IIT Patna SAAR Team ||</p>
    </section>

    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
</body>
</html>