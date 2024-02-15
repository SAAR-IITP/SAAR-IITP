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
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <style>
        @media (max-width: 767px) {
            .temp {
                display: none;
                visibility: hidden;
            }
        }

        li i {
            font-size: 20px;
            padding-right: 8px;
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
                    <li><a href="#top">HOME</a></li>
                    <li><a href="#video">ABOUT US</a></li>
                    <li><a href="#projects">MEDIA</a></li>
                    <li><a href="#blog">EVENTS</a></li>
                    <li><a href="#contact">CONATCT US</a></li>
                    <li><a href="team.php">TEAM</a></li>

                    <li>
                        <form action="#" method="post" id="log">
                            <?php
                            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                                ?>
                                <button class="button" formaction="portal.php"><span>My Profile </span></button>
                                <?php
                            } else {
                                ?>
                                <button class="button" formaction="signin.php"><span>Login/Signup </span></button>
                                <?php
                            }
                            ?>
                        </form>
                    </li>
                    <!-- <li><form action="#" method="post" id="log" target="_blank">
                            <button class="btn" formaction="team.php">TEAM</button>
                        </form></li> -->
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
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                ?>
                <div id="hello">
                    <h2>Hi "
                        <?php echo $_SESSION["fname"] . " " . $_SESSION["lname"]; ?>"
                    </h2>
                </div>
                <?php
            }
            ?>
            <ul>
                <li>
                    <a href="#top">
                        <!-- <span class="rect"></span>
                            <span class="circle"></span> -->
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#video">
                        <!-- <span class="rect"></span>
                            <span class="circle"></span> -->
                        <i class="fas fa-info-circle"></i>
                        About Us
                    </a>
                </li>
                <li>
                    <a href="#projects">
                        <!-- <span class="rect"></span>
                            <span class="circle"></span> -->
                        <i class="far fa-images"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#blog">
                        <!-- <span class="rect"></span>
                            <span class="circle"></span> -->
                        <i class="fas fa-calendar-alt"></i>
                        Events
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <!-- <span class="rect"></span>
                            <span class="circle"></span> -->
                        <i class="fas fa-phone-volume"></i>
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="team.php">
                        <i class="fa fa-users"></i>
                        Team
                    </a>

                </li>

                <li>
                    <form action="#" method="post" id="log">
                        <?php
                        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                            ?>
                            <button class="button" style="vertical-align:middle" formaction="portal.php"><span>My Profile
                                </span></button>
                            <?php
                        } else {
                            ?>
                            <button class="button" style="vertical-align:middle" formaction="signin.php"><span>Login/Signup
                                </span></button>
                            <?php
                        }
                        ?>
                    </form>
                </li>
                <!-- <li><form action="#" method="post" id="log">
                        <button class="btn" style="min-width: 120px;margin-left: 10px;" formaction="team.php">TEAM</button>
                    </form></li> -->
            </ul>
        </nav>
    </div>

    <div class="slider">
        <div class="Modern-Slider content-section" id="top">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<div class='message-beauty'>" . $_SESSION['msg'] . "</div>";
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <div><br><br>
                            <h1>Actions speak louder than words!<br> Give today.</h1>
                            <div class="accent-button button">
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
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<div class='message-beauty'>" . $_SESSION['msg'] . "</div>";
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <div><br><br>
                            <h1>Actions speak louder than words!<br> Give today.</h1>
                            <div class="accent-button button">
                                <a href="don.html">Donate Now</a>
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
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<div class='message-beauty'>" . $_SESSION['msg'] . "</div>";
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <div><br><br>
                            <h1>Actions speak louder than words!<br> Give today.</h1>
                            <div class="accent-button button">
                                <a href="don.html">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
            </div>
        </div>
    </div>

    <div class="page-content" style="float: right;">

        <section id="video" class="content-section">
            <div class="row">
                <h1><span>About Us</span></h1>
                <div class="col-md-6">
                    <div class="image">
                        <img src="img/abt.jpeg">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-heading"><br>
                        <p>Indian Institute of Technology Patna is an Institution of National Importance and a new
                            addition to the hallowed IIT System that has proven its worth in last 50+ years. The alumni
                            of IIT are internationally known for their caliber and contribution. Since its inception in
                            2008, IIT Patna- like its young as well as established peers- has pursued excellence with
                            steadfast determination. IITP has 6 Engineering Disciplines: Civil and Environmental
                            Engineering, Chemical and Biochemical Engineering, Computer Science and Engineering,
                            Electrical Engineering, Mechanical Engineering and Material Science and Engineering; 2
                            Science Disciplines: Physics and Chemistry; Humanities and Social Sciences; Mathematics. Its
                            faculty members are experts in their respective fields. The thriving PhD, M.Tech and B.Tech
                            programs of IITP see the students and faculty publish prolifically, win competitions, come
                            up with innovations and build societal awareness.</p>
                    </div>
                </div>
                <div class="accent-button button">
                    <a href="about.php">Continue Reading</a>
                </div>
            </div>
        </section>

        <section id="projects" class="content-section">
            <div class="section-heading" style="text-align: center; margin-bottom: 10px;">
                <h1 style="padding-bottom: 10px"><span><em>Gallery</em></span></h1>
            </div>
            <div class="section-content">
                <div class="masonry">
                    <div class="row" style="background-color: #fff;">
                        <div class="item">
                            <div class="col-md-8">
                                <a href="img/FB_IMG_1547760148443.jpg" data-lightbox="image"><img
                                        src="img/FB_IMG_1547760148443.jpg" alt="image 1"></a>
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
                                <a href="gallery.php">View Full Gallery</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="section-heading"
                        style="text-align: center;margin-bottom: 10px;padding-top:40px;padding-bottom:10px;">
                        <h1><span>Anusmriti <em></em></span></h1>
                    </div>
                    <div style="position:relative;">
                        <img src="img/anu.jpeg" alt="Anusmriti">
                        <div class="dropdown">
                            <button class="dropbtn">Read Anusmriti</button>
                            <div class="dropdown-content">
                                <a href="anusmriti/vol4/issue1.pdf" target="_blank">Volume 4, Issue 1</a>
                                <a href="anusmriti/vol3/issue1.pdf" target="_blank">Volume 3, Issue 1</a>
                                <a href="anusmriti/vol2/issue2.pdf" target="_blank">Volume 2, Issue 2</a>
                                <a href="anusmriti/vol2/issue1.pdf" target="_blank">Volume 2, Issue 1</a>
                                <a href="anusmriti/vol1/issue2.pdf" target="_blank">Volume 1, Issue 2</a>
                                <a href="anusmriti/vol1/issue1.pdf" target="_blank">Volume 1, Issue 1</a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class="col-md-5">
                    <br><br>
                    <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
                        <h1><span>We on <em>Facebook</em></span></h1>
                    </div>
                    <br>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsaar.iitp%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=224254148413683"
                        width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </section>

        <section id="blog" style="background:#fff;" class="content-section">

            <section class="timeline" id="timelin" style="background: #003C4D;margin-left: -40px;">
                <div class="section-heading" style="text-align: center; margin-bottom: 10px;">
                    <h1 class="timeline-header"><span><em style="font-size: 1.5em">Events</em></span></h1>
                </div>
                <br>
                <!-- <div class ="events"> -->
                <div class="col-md-12" style="border:2px solid #26C1ED ;">

                    <!-- <h2 style="color:white;text-align:center;text-decoration:underline #26C1ED;">Past Events</h2> -->
                    <div class="scrollable"
                        style="display:flex;flex-direction:row;flex-wrap:nowrap;overflow-x:auto;align-items:center;-webkit-overflow-scrolling:touch;">

                        <div class="card" style="width:350px;float:left;height:420px;margin:50px;flex:0 0 auto;">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>

                        <div class="card" style="width: 350px;float:left;height:420px;margin:50px;flex:0 0 auto">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>

                        <div class="card" style="width: 350px;float:left;height:420px;margin:50px;flex:0 0 auto">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>
                        <div class="card" style="width: 350px;float:left;height:420px;margin:50px;flex:0 0 auto">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>
                        <div class="card" style="width: 350px;float:left;height:420px;margin:50px;flex:0 0 auto">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>
                        <div class="card" style="width: 350px;float:left;height:420px;margin:50px;flex:0 0 auto">
                            <div class="black" style="height:90px;background-color:#AED6F1;">
                            </div>
                            <div class="white" style="height:270px;background-color:white;">
                            </div>
                            <!-- <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div> -->
                        </div>
                        <!-- <div class="card" style="width: 500vh;height:515px;float:left;height:515px;margin:50px;">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </div>
       <div class="card" style="width: 500vh;height:515px;float:left;height:515px;margin:50px;">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </div> -->
                        <!-- <div class="card" style="width: 500vh;height:515px;float:left;height:515px;margin:50px;">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </div>
       <div class="card" style="width: 500vh;height:515px;float:left;height:515px;margin:50px;">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </div>
       <div class="card" style="width: 500vh;height:515px;float:left;height:515px;margin:50px;">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
           <p class="card-text"></p>
           <a href="#" class="card-link">Card link</a>
           <a href="#" class="card-link">Another link</a>
         </div>
       </div> -->
                        <!-- <ol>
       
                               <li>
                                   <div >
                                       <time>Guidance session by Shikhar Choudhary</time>
                                       <p> 9th August at 4:00 pm</p>
                                       Shikhar Choudhary, an alumnus of IIT Patna achieved his dream by securing AIR 97, UPSC-CSE'19, only through resolute determination and consistency . To help more students in following this scruplous path to acheive the target, SAAR IIT Patna conducted a guidance session by Shikhar Choudhary. 
                                   </div>
                               </li>
       
                               <li>
                                   <div >
                                       <time>Anusmriti Volume III</time>
                                       <p>16 June 2020 </p>
                                       SAAR proudly presents to you, the brand new, 3rd Volume of Anusmriti-The official Alumni newsletter of IIT Patna featuring an Alma Speak from Gagandeep Singh and inspiring and informational words from Mr. Pranav Suresh and Ms.Ravneet Kaur. 
                                   </div>
                               </li>
       
                               <li>
                                   <div >
                                       <time>Inter IIT Music Theme Competition</time>
                                       <p>14 june 2020 </p>
                                       We're are extremely happy and honored to congratulate Dr. Sujoy Kumar Samanta ( Assistant Professor, CBE) and his team for winning the Inter IIT Theme Music Video competition under the faculty category, which was conducted by the IIT Alumni Council. 
                                   </div>
                               </li>
       
                                 <li>
                                   <div >
                                       <time>Free Coursera courses for students</time>
                                       <p>25 may 2020 </p>
                                       SAAR feels elated to inform you that Students' Gymkhana, on behalf of the institute, has partnered with Coursera where the students as well as Alumni are getting benefits to avail free certified Coursera courses from top-ranked institutions across the globe as a part of its COVID initiative. 
                                   </div>
                               </li>
       
                               <li>
                                   <div >
                                       <time>FIGHT against Covid-19</time>
                                       <p>2 april 2020 </p>
                                       An attempt by IIT Patna student community to try and help our heroes who are putting their life at risks to help people is been made. Bitthal Saraf(BT/ME/13), our alumnus has taken up the initiative to provide protective visors, free of cost to doctors and the nursing staff who are continuously exposed to COVID19 live cases. 
                                   </div>
                               </li>
                               <li>
                                   <div >
                                       <time>4 years of quarentine</time>
                                       <p>24 march 2020 </p>
       
                                       This was an online event where our alumni uploaded there first 
                                       and last year photographs. This helped us all to refresh our 
                                       pleasent memories inside the campus.
                                        
                                   </div>
                               </li>
       
                               <li>
                                   <div >
                                       <time style="font-size: 15px;"> Anusmriti Volume II Issue II</time>
                                       <p>4 January 2020 </p>
                                       SAAR feels extremely proud to present to you, the next issue of the much-awaited Anusmriti - the official Alumni newsletter of IIT Patna featuring an Alma Speak from Spandana Rachamadugu.    
                                   </div>
                               </li>
                           
                               <li>
                                   <div >
                                       <time style="font-size: 15px;"> Abhijeet Agnihotri interacted with IIT Patna Family</time>
                                       <p>5 Nov 2019 </p>
                                       Watching our alumni conquer the world as they continue to strive to move forward with the skills and personalities they’ve honed at IIT Patna fills us with pride and fuels us with aspiration! We would like to express our humble gratitude to Abhijeet Agnihotri for allowing us to felicitate him and also for interacting with the student junta of IITP.    
                                   </div>
                               </li>
                               </ol> -->

                    </div>
                </div>



            </section>
        </section>



        <section id="extra" class="content-section">
            <div class="imgbox">
                <img class="center-fit" src='img/Group 38.png'>
            </div>
            <div class="centered">
                <span id="remove">
                    <h4 style="color: #003C4D;">"We make a living by what we get, we make a life by what we give"</h4>
                    <h4 style="color: #26C1ED;">~Winston Churchill</h4>
                </span>
                <div id="shift" class="new">
                    <a href="don.html">Donate Now</a>
                </div>
            </div>
        </section>
        <section id="contact" class="content-section">
            <div id="con">
                <!-- <div class="col-md-12">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div> -->
                <div class="col-md-3">
                    <br>
                    <br>
                    <img src="/logo1.png" style=""><br><br>
                    <div class="teext">
                        <!-- <img src="/logo1.png" style=""> -->
                        <!-- <h1 style="font-size:24px;">Quick <span>Links</span></h1><br> -->
                        <!-- <p> <a style="text-decoration:none; color:#fff" href="https://www.iitp.ac.in/">IIT Patna</a><br>
                        <a style="text-decoration:none; color:#fff" href="https://www.iitp.ac.in/alumni/">ITPAA</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Reach Us</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Terms of Use</a><br>
                        <a style="text-decoration:none; color:#fff" href="#">Privacy Policy</a>
                        </p> -->
                        <!-- <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ea neque velit dicta repudiandae vitae esse nam soluta similique quod!</p>
                            <!-- <p> <a style="text-decoration:none; color:#fff" href="https://www.facebook.com/saar.iitp/"><i class="fab fa-facebook-square" aria-hidden="true" style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i></a>  -->
                        <a style="text-decoration:none; color:#fff" href="https://www.instagram.com/saar.iitp"><i
                                class="fab fa-instagram" aria-hidden="true"
                                style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i></a>
                        <a style="text-decoration:none; color:#fff" href="https://www.facebook.com/saar.iitp/"><i
                                class="fab fa-facebook-square" aria-hidden="true"
                                style="font-size: 18px; color: #26C1ED; margin-right: 14px;"></i></a>
                        <a style="text-decoration:none; color:#fff" href="https://www.linkedin.com/company/saar-iitp"><i
                                class="fab fa-linkedin" aria-hidden="true"
                                style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i></a>
                        <a style="text-decoration:none; color:#fff" href="https://www.twitter.com/saar_iitp"><i
                                class="fab fa-twitter" aria-hidden="true"
                                style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i></a>
                        <a style="text-decoration:none; color:#fff"
                            href="https://www.youtube.com/channel/UCoAb1YggffbfgVxQyXaZB-g"><i class="fab fa-youtube"
                                aria-hidden="true" style="font-size: 20px; color: #26C1ED; margin-right: 14px;"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="teext">
                        <h1 style="font-size:24px;">Quick <span>Links</span></h1><br>
                        <p> <a style="text-decoration:none; color:#fff" href="https://www.iitp.ac.in/">IIT Patna</a><br>
                            <a style="text-decoration:none; color:#fff"
                                href="https://www.iitp.ac.in/alumni/">ITPAA</a><br>
                            <a style="text-decoration:none; color:#fff" href="#">Reach Us</a><br>
                            <a style="text-decoration:none; color:#fff" href="#">Terms of Use</a><br>
                            <a style="text-decoration:none; color:#fff" href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="teext">
                        <h1 style="font-size:24px;">Contact <span> Us</span></h1><br>
                        <p> Office of A Dean Resource<br>
                            Administrative Building, IIT Patna<br><br>
                            Prof. In-charge:<br>
                            Dr. Anirban Chowdhary<br>
                            Email - pic_alumni@iitp.ac.in<br><br>
                            General Secretary:<br>
                            <a href="#" style="color: #fff">Aravind Ajay</a><br>
                            Email - aravind_1901CS08@iitp.ac.in
                        </p>
                    </div>
                </div>

                <div class="col-md-3">

                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721"
                            width="90%" height="300px" frameborder="0" style="border-radius:10% ;margin-top:45px"
                            allowfullscreen></iframe>


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

    <script src="js/timeline.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function (event) {
            didScroll = true;
        });

        setInterval(function () {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }
    </script>

    <script>
        $(document).ready(function () {

            $(window).scroll(function () {
                var scrolltop = $(window).scrollTop();
                if (scrolltop < 50) {
                    $('.sidebar-navigation .logo').css({ "background-color": "#26C1ed" });
                    // $('.sidebar-navigation.hidde-sm.hidden-xs').removeClass("scroll");
                    // $('.sidebar-navigation ul').removeClass("margin-cut");
                    $('.sidebar-navigation').css({ "background-color": "#003C4D" });
                    $('.sidebar-navigation nav a').css({ "color": "#fff" });

                }
                else if (scrolltop > 50) {
                    $('.sidebar-navigation').css({ "background-color": "#232323" });
                    $('.sidebar-navigation .logo').css({ "background-color": "#232323" });
                    // $('.sidebar-navigation.hidde-sm.hidden-xs').addClass("scroll");
                    // $('.sidebar-navigation ul').addClass("margin-cut");
                }
            })
        })
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
