<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        
        <style>
            @media (max-width: 767px) {
                .temp {
                display: none;
                visibility: hidden;
                }
            }
            
        </style>
        
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
                        <li><a href="#top">Home</a></li>
                        <li><a href="#video">About Us</a></li>
                        <li><a href="#projects">Gallery</a></li>
                        <li><a href="#blog">Events</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="signin.php">Login / Signup</button>
                        </form></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <img src="img/logo1.png" class="static">
            </div>
            <nav>
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
                ?>
                <div id="hello">
                        <h2>Hi "<?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?>"</h2>
                </div>
                <?php
                     }
                ?>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            About US
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Events
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
                            <?php
                                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
                            ?>
                            <button class="button" style="vertical-align:middle" formaction="portal.php"><span>My Profile </span></button>
                            <?php
                                    }
                                else{
                            ?>
                            <button class="button" style="vertical-align:middle" formaction="signin.php"><span>Login/Signup </span></button>
                            <?php
                                }
                            ?>
                        </form>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/saar.iitp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <div class="item item-1">
                    <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div><br><br>
                          <h1>Actions speak louder than words!<br> Give today.</h1>
                          <div class="white-button button">
                                <a href="don.html">Donate Now</a>
                          </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-2">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                            <div><br><br>
                          <h1>Actions speak louder than words!<br> Give today.</h1>
                          <div class="white-button button">
                                <a href="donate.html">Donate Now</a>
                          </div>
                        </div>
                        </div>
                        </div>
                    </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-3">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div><br><br>
                          <h1>Actions speak louder than words!<br> Give today.</h1>
                          <div class="white-button button">
                                <a href="donate.html">Donate Now</a>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
            </div>
        </div>
    </div> 

<div class="page-content" style="float: right;">
    
            <section id="video" class="content-section" >
                <div class="row">
                    <div class="col-md-12" style="border-style: solid;border-width: thin;border-color: #000;border-radius:16px;">
                        <div class="section-heading" ><br>
                            <h1>About <em>US</em></h1>
                            <p>Indian Institute of Technology Patna is an Institution of National Importance and a new addition to the hallowed IIT System that has proven its worth in last 50+ years. The alumni of IIT are internationally known for their caliber and contribution. Since its inception in 2008, IIT Patna- like its young as well as established peers- has pursued excellence with steadfast determination. IITP has 6 Engineering Disciplines: Civil and Environmental Engineering, Chemical and Biochemical Engineering, Computer Science and Engineering, Electrical Engineering, Mechanical Engineering and Material Science and Engineering; 2 Science Disciplines: Physics and Chemistry; Humanities and Social Sciences; Mathematics. Its faculty members are experts in their respective fields. The thriving PhD, M.Tech and B.Tech programs of IITP see the students and faculty publish prolifically, win competitions, come up with innovations and build societal awareness.</p>
                        </div>
                        <div class="accent-button button">
                            <a href="about.html">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="content-section">    
                <div class="section-heading" style="text-align: center; margin-bottom: 10px;">
                    <h1><em>Gallery</em></h1>
                </div>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row" style="background-color: #fff;">
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="img/FB_IMG_1547760148443.jpg" data-lightbox="image"><img src="img/FB_IMG_1547760148443.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item second-item">
                                <div class="col-md-4">
                                    <a href="img/cs.jpg" data-lightbox="image"><img src="img/cs.jpg" alt="image 2"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/ee.jpg" data-lightbox="image"><img src="img/ee.jpg" alt="image 3"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/mech.jpg" data-lightbox="image"><img src="img/mech.jpg" alt="image 4"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/chem.jpg" data-lightbox="image"><img src="img/chem.jpg" alt="image 5"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/civ.jpg" data-lightbox="image"><img src="img/civ.jpg" alt="image 6"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <form id="extra" action="#" method="post">
                        <div class="row" style="background-color: #fff;">
                            <div class="col-md-12">
                                <div class="accent-button button">
                                    <a href="gallery.html">View Full Gallery</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
    
            <section id="extra" class="content-section">
                <div class="row">
                    <div class="col-md-12">  
                        <br><br>
                        <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
                            <h1>A featured <em>Video</em></h1>
                        </div>
                        
                        <div class="box-video">
                            <div class="bg-video" style="background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);">
                                <div class="bt-play">Play</div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="520" src="https://www.youtube.com/embed/LfoCTLyNd38" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!--<iframe width="100%" height="520" src="https://www.youtube.com/embed/LfoCTLyNd38" frameborder="0" allowfullscreen></iframe>    -->      
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog"  style="background:#fff;" class="content-section">
                <div class="row"  style="background:#fff;">
                <div class="col-md-7">  
                <div class="section-content">
                    <div class="tabs-content" >
                        <div class="wrapper">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                              <li><a href="#tab1" class="active">Event 1</a></li>
                              <li><a href="#tab2">Event 2</a></li>
                              <li><a href="#tab3">Event 3</a></li>
                            </ul>
                            <section id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="text-content">
                                                    <h4>Mr. Utsav Gautam</h4>
                                                    <span>(B. Tech/EE/2013)</span>
                                                    <p>Mr. Utsav Gautam (B. Tech/EE/2013) who recently bagged AIR 33 in the UPSC CSE 2017 examination, on our request has agreed to go live through this page so that he can clear the doubts of the aspiring candidates and guide them.Mr. Utsav Gautam (B. Tech/EE/2013) who recently bagged AIR 33 in the UPSC CSE 2017 examination, on our request has agreed to go live through this page so that he can clear the doubts of the aspiring candidates and guide them.</p>
                                                    <div class="accent-button button">
                                                        <a href="#">Continue Reading</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="text-content">
                                                    <h4>Mr. Vitthal Pandey</h4>
                                                    <span>(B. Tech/ME/2016)</span>
                                                    <p>
                                                        We feel proud to reveal that our reputed alumnus Mr. Vitthal Pandey (Mechanical Engineering, Batch of 2016) bagged an astonishing AIR 5 in the UPSC Engineering Services 2018 exam. We here at SAAR and IIT Patna feel proud of his achievements and wish him best in his future endeavors.

#ProudIITPian
                                                    </p>
                                                    
                                                    <div class="accent-button button">
                                                        <a href="#">Continue Reading</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="text-content">
                                                    <h4>Mr. Vijay Narayan</h4>
                                                    <span>(B. Tech/ME/2013)</span>
                                                    <p>It is a matter of pride to announce that one of our most reputed alumni, Mr. Vijay Narayan (Mechanical Engineering, Batch of 2013) has bagged a mind-blowing AIR 13 in this recent UPSC IES examination. 
We all here at SAAR and IIT Patna feel proud of his achievement and wish him best in his future endeavors.

#ProudIITPian</p>
                                                    
                                                    <div class="accent-button button">
                                                        <a href="#">Continue Reading</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                    </div>
                </div>
                </div>
                <div class="temp">
                <div class="col-md-5">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsaar.iitp%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=224254148413683" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                </div>
                </div>
            </section>

            <section id="extra" class="content-section">
                <div class="row">
                    <div class="imgbox">
                        <img class="center-fit" src='img/Group%2038.png'>
                    </div>
                    <div class="centered">
                        <span id="remove"><h4 style="color: #003C4D;">"We make a living by what we get, we make a life by what we give"</h4>
                        <h4 style="color: #26C1ED;">~Winston Churchill</h4></span>
                        <div id="shift" class="new">
                        <a href="donate.html">Donate Now</a>
                    </div>
                    </div>
                </div>
            </section>

            <section  id="contact" class="content-section">
                <div id="con">    
                    <div class="col-md-6" style="padding:0;">  
                        <div id="map">
                
                	<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                    <div class="col-md-6">  
                        <div class="teext">
                            <h1>Contact <span> US</span></h1><br>
                        <p> <i class="fa fa-envelope" aria-hidden="true" style="font-size: 28px; color: #26C1ED; margin-right: 14px;"></i>saar@iitp.ac.in<br><br><br>
                            <i class="fa fa-phone" aria-hidden="true" style="font-size: 32px; color: #26C1ED; margin-right: 14px;"></i>8827275145<br><br><br>
                            <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 32px; color: #26C1ED; margin-right: 14px;"></i> IIT Patna Campus, Patna, 801110</p>            
                        </div>
                    </div>
                </div>
            </section>

            <section class="footer">
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

    <script>
        function on() {
            document.getElementById("myModal").style.display = "block";
        }

        function off() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>
