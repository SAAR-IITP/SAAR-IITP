<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: signin.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAAR Profile</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/profile.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link rel="stylesheet" href="css/cards.css" >
        <link rel="stylesheet" href="css/main.css" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body style="background: #fff">

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
                        <li><a href="#video">Profile</a></li>
                        <li><a href="#extra">Settings</a></li>
                        <li><a href="#blog">Utilities</a></li>
                        <li><a href="#projects">Gallery</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li>
                           <form action="logout.php" method="post" id="log">
                            <button class="button" style="vertical-align:middle" onclick="location.href = 'logout.php';"><span>Logout </span></button> 
                        </form>
                        </li>
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
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#extra">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Utilities
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Newsfeed
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
                        <form action="logout.php" method="post" id="log">
                            <button class="button" style="vertical-align:middle" onclick="location.href = 'logout.php';"><span>Logout </span></button> 
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
        
        <div class="page-content">        
            <section id="header">
				<div class="inner">
					<span class="icon major fa-cloud"></span>
					<h1>Welcome To <strong>SAAR</strong><br>
					<span class="go">Students' Association for Alumni Relations</span></h1>
                    <p style="font-size: 20px; color: #fff;">Actions speak Better than words.</p>
					<ul class="actions special">
                        <button class="button" style="vertical-align:middle; background: #003C4D; padding: 10px;" onclick="window.location.href='donate.html'" ><span>Donate Now </span></button>
					</ul>
				</div>
			</section>

            <section id="video" class="content-section">    
                <div class="section-heading" style="text-align: center;">
                    <br><br>
                    <h1><?php echo "".$_SESSION["fname"];?><em> <?php echo " ".$_SESSION["lname"];?></em></h1>
                </div>
                <section id="one" class="main style1">
				    <div class="container" >
					   <div class="row gtr-150" style="background: #fff">
						<div class="col-6 col-12-medium">
							<p>College Id : <?php echo $_SESSION["cid"];?> </p>
                            <p>DOB : <?php echo $_SESSION["dob"]; ?></p>
                            <p>Email id : <?php echo $_SESSION["email"];?> </p>
                            <p>Contact no. : <?php echo $_SESSION["contact"];?> </p>
                            <p>Graduation year : <?php echo $_SESSION["graduation"];?> </p>
                            <p>Degree : <?php echo $_SESSION["degree"];?> </p>
                            <p>Department : <?php echo $_SESSION["dept"];?> </p>
                        </div>
						<div class="col-6 col-12-medium imp-medium">
							<span class="image fit"><img src="img/prof.jpeg" alt="" /></span>
						</div>
					</div>
				</div>
			</section>    
            </section>
            
            <section id="extra" class="content-section">
                    <button class="button" style="vertical-align:middle; background: #003C4D; padding: 10px; margin-left: 15px;" onclick="location.href = 'changePassword.php';"><span>Change Password</span></button>
                    </form>
                    <button class="button" style="vertical-align:middle; background: #003C4D; padding: 10px; margin-left: 15px;" onclick="location.href = 'updateProfile.php';"><span>Update Profile</span></button>
                    </form>
                    <button class="button" style="vertical-align:middle; background: #003C4D; padding: 10px; margin-left: 15px;" onclick="location.href = 'changeEmail.php';"><span>Change E-mail</span></button>
			</section>

    <section id="blog" class="content-section">
        <section class="details-card">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/ff.jpeg" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Alumni</h3>
                        <h4>Near You</h4>   
                    </div>
                    <form action="#" method="post">
                            <button class="btn-card" style="margin: 0.56em;" formaction="findAluminiNearby.php">Click Here</button>
                        </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/frndz.jpg" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Find</h3>
                        <h4>Friends</h4>   
                    </div>
                    <form action="#" method="post">
                            <button class="btn-card" style="margin: 0.56em;" formaction="findFriends.php">Click Here</button>
                        </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/anusm.jpeg" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Download</h3>
                        <h4>Anusmriti</h4>   
                    </div>
                    <form action="#" method="post">
                            <button class="btn-card" style="margin: 0.56em;" formaction="#">Click Here</button>
                        </form>
                </div>
            </div>
        </div>
</section>
    </section>
            
            
            <section id="header">
				<div class="inner">
					<span class="icon major fa-handshake-o"></span>
					<h1>Need<strong>Help</strong><br>
					</h1>
					<ul class="actions special">
                        <button class="button" style="vertical-align:middle; background: #003C4D;  padding: 10px;" formaction="needhelp.php"><span>Priviledge Us </span></button>
					</ul>
				</div>
			</section>

            <section  id="contact" class="content-section">
                <div id="con">    
                    <div class="col-md-6">  
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
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    		<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main2.js"></script>

        
        
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
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>