<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
    {
        header("location: portal.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login V2</title>



	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
    
    <style>

        body {
            background: #EEFBFF;
            background: url('img/bggg.png');
            background-size: cover;
            font-family: 'Montserrat' Semibold ;
        }
        
    </style>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    
    <div id="table" class="col-sm-6" >
        <div class="limiter">
		<h1>Log In</h1>
            <div class="visible">
                <br><br><br>
            </div>
            <div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" >
						<input class="input100" type="text" name="email" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
					</div>
                    <div id="forgot">
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <?php
                if(isset($_SESSION['error'])){
                    echo "<h5>".$_SESSION['error']."</h5>";
                    unset($_SESSION['error']);
                }
             ?>
               <br><br><br>
			 </div>
		  </div>
            <button class="buton">Log In</button><br><br><br><br><br><br><br>
             </form>
	   </div>
    </div>
            
    <div id="table" class="col-sm-6" >
        <h1>Sign Up</h1>
        <p>Signup now to register to SAAR membership</p>
        <br><br><br>
        <button class="buton" onclick="window.location.href='signup.php'">Sign Up</button><br><br>
        
        <table><tr>
            <td style="border-bottom: 1px solid #003C4D; width: 49%">&nbsp;</td>
            <td style="vertical-align:middle;text-align:center" rowspan="2">Or</td>
            <td style="border-bottom: 1px solid #003C4D; width: 49%">&nbsp;</td>
            </tr><tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr></table>

        <br>
        <button class="buton" onclick="window.location.href='/signup.php?type=fblogin'">Register using Facebook</button>
        <br>
    </div>
  </div>
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
window.onload = function(){
          <?php
            if(isset($_SESSION['loginfail']) && $_SESSION['loginfail'] == true)
            {
                echo 'setTimeout("alertpass()", 1000); ';
                $_SESSION['loginfail']=false;   
                unset($_SESSION['loginfail']);
            }
            ?>
        };

function alertpass(){
    alert("Incorrect Credentials");
}         
    </script>
    
</body>
</html>
