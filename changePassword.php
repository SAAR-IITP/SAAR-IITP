<?php
session_start();
if((!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false) && (!isset($_SESSION['forget_pass']) || $_SESSION['forget_pass']==false))
{
    header("location: signin.php");
}
?>
<html>
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>

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
     </style>     
         
         <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="logout.php">Logout</button>
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
                <ul>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle; width: 20px;" formaction="portal.php"><span>Profile</span></button>
                        </form>
                    </li>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="logout.php"><span>Logout</span></button>
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

     <section id="credit" style="background: #003C4D; padding: 10px;">  
            <div style="text-align: center;margin-bottom: 10px;"><br><br><br><br>
                <h1 id="error" style="color: #fff; text-decoration: underline; padding-left: 30px;">
                    <?php
                    if(isset($_SESSION['error'])){
                      echo $_SESSION['error'];
                      unset($_SESSION['error']);
                    }
                    ?>      
                </h1><br>
            </div>  
    </section> 
     
         
      <section id="extra" style="padding: 0; background: url('img/bggg.png');">
            <h1>Change Password</h1><br>
		  <div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="passchange.php">
                  <?php if(isset($_SESSION['forget_pass']) && $_SESSION['forget_pass'] == true){ ?>
                    <input name="forget_pass" hidden value="<?php echo $_SESSION['forget_pass']?>" >
                    <input type="password" size="50" name="password" hidden value="1234">
                  <?php }else{ ?>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" size="50" name="password" required>
                        <span class="focus-input100" data-placeholder="Enter your existing password"></span>
					</div>
                  <?php } ?>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password"  size="50" name="newpassword" required>
                        <span class="focus-input100" data-placeholder="Enter your new password"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password"  size="50" name="confirmnewpassword" required>
                        <span class="focus-input100" data-placeholder="Re-enter your new password"></span>
					</div>
               
			 </div>
		  </div>

          <button class="buton" type="submit">Update Password</button>
           </form>
      </section>
        </div>
    <script>
      
        (function ($) {
            "use strict";

            /*==================================================================
            [ Focus input ]*/
            $('.input100').each(function(){
                $(this).on('blur', function(){
                    if($(this).val().trim() != "") {
                        $(this).addClass('has-val');
                    }
                    else {
                        $(this).removeClass('has-val');
                    }
                })    
            })
        
            /*==================================================================
            [ Validate ]*/
            var input = $('.validate-input .input100');

            $('.validate-form').on('submit',function(){
                var check = true;
                for(var i=0; i<input.length; i++) {
                    if(validate(input[i]) == false){
                        showValidate(input[i]);
                        check=false;
                    }
                }
                return check;
            });


            $('.validate-form .input100').each(function(){
                $(this).focus(function(){
                hideValidate(this);
                });
            });

            function validate (input) {
                if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                    if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                        return false;
                    }
                }
                else {
                    if($(input).val().trim() == ''){
                        return false;
                    }
                }
            }

            
            function showValidate(input) {
                var thisAlert = $(input).parent();
                $(thisAlert).addClass('alert-validate');
            }

            function hideValidate(input) {
                var thisAlert = $(input).parent();
                $(thisAlert).removeClass('alert-validate');
            }
            
            /*==================================================================
            [ Show pass ]*/
            var showPass = 0;
            $('.btn-show-pass').on('click', function(){
                if(showPass == 0) {
                    $(this).next('input').attr('type','text');
                    $(this).find('i').removeClass('zmdi-eye');
                    $(this).find('i').addClass('zmdi-eye-off');
                    showPass = 1;
                }
                else {
                    $(this).next('input').attr('type','password');
                    $(this).find('i').addClass('zmdi-eye');
                    $(this).find('i').removeClass('zmdi-eye-off');
                    showPass = 0;
                }
            });
        })(jQuery);
        
    </script>
   </body>
</html> 