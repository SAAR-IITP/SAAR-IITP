<?php
    session_start();
?>
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
        <style>
            .section-heading div{
                padding: 10px 20px;
                margin: 10px 20px;
                width: 80%;
            }
            #video p{
                color: #fff;
            }
            @media screen and (max-width:767px){
            .page-content{
                padding-top: 60px;
            }
            }
        </style>
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
                    <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
                ?>
                <div id="hello">
                        <h2>Hi "<?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?>"</h2>
                </div>
                <?php
                     }
                ?>
                
                    <ul class="nav navbar-nav">
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
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="index.php">HOME</button>
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
                <div style="margin-top:-10px;">
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
                ?>
                <div id="hello">
                        <h2>Hi "<?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?>"</h2>
                </div>
                <?php
                     }
                ?>
    </div>
                
                <ul>
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
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="index.php"><span>Home </span></button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        


        <div class="page-content">
            <section id="video">
                <div class="section-heading">
                    <h1><span style="font-size: 50px;">About<em>US</em></span></h1>
                </div>
            </section>
    
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <div style="background: url('img/bgg1.jpeg');">
                            <h1 class="timeline-header"><span><em style="font-size: 0.9em">Background</em></span></h1>
                            <p>Indian Institute of Technology Patna is an Institution of National Importance and a new addition to the hallowed IIT System that has proven its worth in last 50+ years. The alumni of IIT are internationally known for their caliber and contribution. Since its inception in 2008, IIT Patna- like its young as well as established peers- has pursued excellence with steadfast determination. IITP has 6 Engineering Disciplines: Civil and Environmental Engineering, Chemical and Biochemical Engineering, Computer Science and Engineering, Electrical Engineering, Mechanical Engineering and Material Science and Engineering; 2 Science Disciplines: Physics and Chemistry; Humanities and Social Sciences; Mathematics. Its faculty members are experts in their respective fields. The thriving PhD, M.Tech and B.Tech programs of IITP see the students and faculty publish prolifically, win competitions, come up with innovations and build societal awareness.</p><br><br>
                            </div>
                            <div style="background: url('img/bgg2.jpeg');">
                            <h1 class="timeline-header"><span><em style="font-size: 1em">Objectives</em></span></h1>
                            <p>Established in 2018, Students' Association for Alumni Relations (SAAR), has been created to maintain a life-long connection between the Institute and its alumni (more than 1500 at present). The committee works in coordination with the institute to create a platform that helps in connecting the former students with their alma mater.<br>
                            Filled with extremely dedicated volunteers, SAAR works to connect alumni, support students and build an unforgettable Institute experience through a diversity of events, programming and services. With the purpose of creating a strong network of alumni, guiding and mentoring juniors, developing the institute, SAAR works towards creating strong alumni relations.</p><br><br>
                            </div>
                            <div style="background: url('img/bgg1.jpeg');">
                            <h1 class="timeline-header"><span><em style="font-size: 1em">Mission</em></span></h1>
                            <p>A bond binds us to the place that guides us towards a fun-filled and fulfilling future....... and that place is our college. No matter where we go, no matter how old our bones grow, bonds always remain strong. We plan on bringing old ‘Partners in Crime’ back together and for that the primary mission of SAAR (Students’ Association for Alumni Relations) is to create a connection with all the Alumni of IIT Patna and to strengthen that relation. We also plan on getting in touch with our Alumni residing in other countries.<br>
                                SAAR aims at spending a defined portion of its manpower, intelligence and resources for the betterment of society through:<br>
                                <ul style="padding-top:10px; color: #fff; ">
                                    <li>Educational and other assistance to students belonging to socially/eeconomically weaker sections</li>
                                    <li>Promoting, encouraging and supporting the social and cultural heritage and traditions of our society</li>
                                    <li>Proactive actions for well-being of the society as per the needs</li>
                                    <li>Incorporating sustainability in education plans, strategies and processes</li>
                                </ul>
                            </p>
                            </div>
                            <div style="background: url('img/bgg2.jpeg'); padding-bottom: 50px;">
                            <h1 class="timeline-header"><span><em style="font-size: 1em">Initiatives</em></span></h1>
                            ]<p>SAAR plans on creating a discussion forum, where students can interact with the Alumni to get their doubts answered.Along with this, SAAR plans on conducting Alumni Chapter in various cities across the country to enhance the relations.<br>
                            To further strengthen the relations between the Alumni and the institute, SAAR also conducts felicitation programs and Alumni talks. <br>
                            SAAR is in process (via regular talks and discussions) to bring reputed industries so as to encourage them to set up research centers and collaborative program through them. The proposed center is expected to be set up with a funding from these industries inside IITP campus and IITP will deliver the knowledge base to give a meaningful solution to their day to day industrial challenges, problems etc.<br>
                            Through National Service Scheme (NSS) activities SAAR is already actively working for the empowered of impoverished sections of humanity and for the nearby villages around IITP campus apart from donation of books, copies and clothes to these society people IITP students are also teaching them on a regular basis.<br>
                            </div>
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
                            Dr. Sudhir Kumar<br>
                            Email - pic_er@iitp.ac.in<br><br>
                            General Secretary:<br>
                            <a href="#" style="color: #fff">Gaurav Pratap Singh</a><br>
                            Email - 1801ee63@iitp.ac.in</p>            
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

    <!-- <script src="js/vendor/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
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