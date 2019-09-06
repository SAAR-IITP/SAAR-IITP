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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link rel="stylesheet" href="css/cards.css" >
        <link rel="stylesheet" href="css/main.css" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            @media screen and (max-width:991px){
                .row .col-md-3{
                    padding: unset;
                }
                .row .col-md-4{
                    padding: 0;
                }
            }
            @media screen and (max-width:980px){
                .image.fit img{
                    width: 300px;
                    margin: 0px auto;
                }
            }
            @media screen and (max-width:767px){
                .row.gtr-150{
                    margin-left: unset;
                }
                .row .col-md-4{
                    padding: 0;
                    width: 100%;
                }
            }
            @media screen and (max-width:444px){
                #extra{
                    padding-left: 20px !important;
                }
                .image.fit img{
                    width: 100%;
                }
                .inner h1{
                    font-size: 35px;
                }
            }
            .imp-medium .fa s{
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
                        }
                        .imp-medium .fa-facebook {
            background: #3B5998;
            color: white;
            }

            .imp-medium .fa-linkedin {
            background: #55ACEE;
            color: white;
            }

            .imp-medium .fa-cog {
            background: #dd4b39;
            color: white;
            }
            @media(max-width:614px){
                #contact{
                    padding-left: 0;
                }
            }
        </style>
        
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
                        <li><a href="#projects">Newsfeed</a></li>
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

            <section id="video" class="content-section">    
                <section id="one" class="main style1">
				    <div class="container" >
                    <?php if(isset($_SESSION['msg'])){ 
                       echo $_SESSION['msg'];
                       unset($_SESSION['msg']);
                        } ?>
					   <div class="row gtr-150" style="background: #fff">
						<div class="col-5 col-12-medium imp-medium">
							<span class="image fit"><img src="<?php echo $_SESSION['img_url']; ?>" alt=""/></span>
                            <?php if(isset($_SESSION['fb']) && $_SESSION['fb'] != ''){ ?> 
                            <a href="<?php echo $_SESSION['fb']; ?>"><i class="fa fa-facebook" style="padding: 5px 5px;"></i></a>
                            <?php } ?>
                            <?php if(isset($_SESSION['linkden']) && $_SESSION['linkden'] != ''){ ?> 
                            <a href="<?php echo $_SESSION['linkden']; ?>"><i class="fa fa-linkedin" style="padding: 5px 5px;"></i></a>
                            <?php } ?>
                            <a href="#"><i class="fa fa-cog" style="padding: 5px 5px;"></i></a>
						</div>
                        <div class="col-7 col-12-medium">
                            <div class="section-heading" style="text-align: center;">
                                <h1><?php echo "".$_SESSION["fname"];?><em> <?php echo " ".$_SESSION["lname"];?></em></h1>
                                <br><ul class="actions special">
                                    <button class="button" style="vertical-align:middle; background: #003C4D; padding: 10px;" onclick="window.location.href='don.html'" ><span>Donate Now </span></button>
					           </ul>
                            </div>
							<p>College Id : <?php echo $_SESSION["cid"];?> </p>
                            <p>DOB : <?php echo $_SESSION["dob"]; ?></p>
                            <p>Email id : <?php echo $_SESSION["email"];?> </p>
                            <p>Contact no. : <?php echo $_SESSION["contact"];?> </p>
                            <p>Graduation year : <?php echo $_SESSION["graduation"];?> </p>
                            <p>Degree : <?php echo $_SESSION["degree"];?> </p>
                            <p>Department : <?php echo $_SESSION["dept"];?> </p>
                            <p>Employment Type : <?php echo $_SESSION["employment_type"];?> </p>
                            <p>Present Employer : <?php echo $_SESSION["present_employer"];?> </p>
                            <p>Designation : <?php echo $_SESSION["designation"];?> </p>
                            <p>Address : <?php echo $_SESSION["address"];?> </p>
                            <p>Country : <?php echo $_SESSION["country"];?> </p>
                            <p>State : <?php echo $_SESSION["state"];?> </p>
                            <p>City : <?php echo $_SESSION["city"];?> </p>
                            <p>Achivements : <?php echo $_SESSION["achievements"];?> </p>
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
            <div class="col-md-4 col-sm-12">
                <div class="card-content" onclick="myFunction()" style="background:#fc1c0d;">
                    <div class="card-img" align="center">
                        <i class="fas fa-route" style="font-size:50px; padding: 20px; color:#fff;"></i>
                    </div>
                    <div class="card-desc" align="center">
                        <h3 style="color:#fff;">Alumni Near You</h3>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card-content" onclick="myFunction()" style="background:#2cc2de;">
                    <div class="card-img" align="center">
                        <i class="fas fa-user-friends" style="font-size:50px; padding: 20px; color:#fff;"></i>
                    </div>
                    <div class="card-desc" align="center">
                        <h3 style="color:#fff;">Find Friends</h3>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card-content" onclick="myFunction()" style="background:#0ad80f;">
                    <div class="card-img" align="center">
                        <i class="fas fa-book-reader" style="font-size:50px; padding: 20px; color:#fff;"></i></div>
                    <div class="card-desc" align="center">
                        <h3 style="color:#fff;">Download Anusmriti</h3>  
                    </div>
                </div>
            </div>
        </div>
</section>
    </section>
            
            
      <div class="container">  
            <form id="contact" action="" method="post">
                <span align="center"><h3 style="color: #327a81">NEED HELP ?</h3></span>
                <fieldset>
                    <input placeholder="Name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Phone Number " type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here.." tabindex="4" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>


        <section  id="contact" class="content-section">
                <div id="con">    
                    <div class="col-md-12" style="padding:0;">  
                        <div id="map">
                
                	<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    
                    <ifr    ame src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="teext">
                            <h1 style="font-size:24px;">External <span>Links</span></h1><br>
                        <p> <i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i>saar@iitp.ac.in<br><br>
                            <i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>8827275145<br><br>
                            <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i> IIT Patna Campus, Patna, 801110</p>            
                        </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="teext">
                            <h1  style="font-size:24px;">Social <span> Media</span></h1><br>
                        <p> <a style="text-decoration:none; color:#fff" href="https://www.facebook.com/saar.iitp/"><i class="fab fa-facebook-f" aria-hidden="true" style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i>SAAR, IIT Patna</a><br><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>Instagram</a><br><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>LinkedIn</a></p>            
                        </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="teext">
                            <h1 style="font-size:24px;">Contact <span> US</span></h1><br>
                        <p> <i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i>saar@iitp.ac.in<br><br>
                            <i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i>8827275145<br><br>
                            <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i> IIT Patna Campus, Patna, 801110</p>            
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