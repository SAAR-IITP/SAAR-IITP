<?php
session_start();
?>
<html>
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Enter OTP</title>    
    <style>
         body {
            background: #EEFBFF;
            background: url('img/bggg.png');
            background-size: cover;
            font-family: 'Montserrat' Semibold ;
        }
        @media screen and (max-width: 400px) {
            #credit h1{
                font-size: 20px;
            }
         }
         #resend {
          text-align: right;
         }
         #resend a {
          text-decoration: none;
         }
     </style>     
         
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
        <link rel="stylesheet" href="css/findal.css">
         <link rel="stylesheet" href="css/login.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
         
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
                            <button class="btn" formaction="portal.php">Profile</button>
                        </form></li>
                        <li>
                          <?php
                             if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                           ?>
                          <form action="#" method="post" id="log">
                            <button class="btn" formaction="logout.php">Logout</button>
                        </form>
                        <?php }else{ ?>
                        <form action="#" method="post" id="log">
                            <button class="btn" formaction="index.php">Home</button>
                        </form>
                        <?php }?>
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
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle; width: 20px;" formaction="portal.php"><span>Profile</span></button>
                        </form>
                    </li>
                    <li>
                      <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                      ?>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="logout.php"><span>Log out</span></button>
                        </form>
                      <?php }else{ ?>
                        <form action="#" method="post" id="log">
                            <button class="button" formaction="index.php">Home</button>
                        </form>
                      <?php }?>
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
     <section id="credit" style="background: #003C4D; padding: 10px;">  
          <div style="text-align: center;margin-bottom: 10px;"><br><br><br><br>
              <h1 id="error" style="color: #fff; text-decoration: underline; padding-left: 30px;">
              <?php 
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
              ?>
              </h1><br>
          </div>
            
    </section>
        
           

      <section id="extra" style="padding: 0; background: url('img/bggg.png');">
            <h1>Enter OTP</h1><br>
      <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="otpvalidationp.php">
          <?php if(isset($_SESSION['cid'])){?>
          <input name="rollno" hidden value=<?php $_SESSION['cid']?> >
          <?php }else{ ?>
          <div class="wrap-input100 validate-input" data-validate="Enter rollno">
            <input class="input100" type="text" size="50" name="rollno" required>
                <span class="focus-input100" data-placeholder="Enter Institute ID"></span>
          </div>
        <?php }?>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="text" size="50" name="otp" required>
            <span class="focus-input100" data-placeholder="Enter OTP"></span>
          </div>
          <div id="resend">
            <a href="resendotpp.php">Resend OTP ?</a>
          </div>
          <?php
              if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
              }
            ?>                    
       </div>
      </div>
          <button class="buton" type="submit">Submit</button>
               </form>
      </section>
        </div>
   </body>
</html>