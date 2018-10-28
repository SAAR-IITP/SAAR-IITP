<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
    {
        header("location: noaccess.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
    
<link type="text/css"  rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="css/templatemo-style.css">
<script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=224254148413683" id="facebook-jssdk"></script><script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
</head>
<body>
	<!-- main -->
    
	<div class="main-w3layouts wrapper">
                <div class="section-heading">
                    <h1><span style="font-size: 50px; background: #E4F9FF; text-align: center;">SAAR <em>Registration Form</em></span></h1>
                </div>
            
        <div class="main-agileinfo">
			<div class="agileits-top">
				<form action="register.php" method="post">
					<input class="text" type="text" name="college_id" placeholder="College Roll number" required>
					
                    <input id="fname" class="text" type="text" name="fname" placeholder="First Name" required>
					
                    <input id="lname" class="text" type="text" name="lname" placeholder="Last Name" required>
					
                    <input id="email" class="text email" type="email" name="email" placeholder="Email" required>
					
                    <input class="text" type="tel" name="contact" placeholder="Contact no." required>
                    
                    <input class="text" type="text" name="fbId" placeholder="Fb Profile Link(optional)" required="">
                    
                    <input class="text" type="text" name="linkden" placeholder="Linkden Link(optional)" required="">
                    
                    <input class="text" type="password" name="password" placeholder="Password" required>
					
                    <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required>
					
                    <input class="text" type="date" name="DOB" placeholder="Date of Birth" required onfocus="(this.type='date')">
                    <i class="ui calendar icon"></i>
                    
                    <input class="text" type="text" name="passingyear" placeholder="Graduation Year(20XX)" required>
                    
                    <select type="text" id="degree" name="degree" class="ui search selection  dropdown">
                    <option value="">Degree</option>
                    <option value="B.Tech">B.Tech/B.E</option>
                    <option value="M.Tech">M.Tech/M.E</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="P.hd">P.hd</option>
                    </select>
    
                    <select type="text" id="branch" name="dept" class="ui search selection   dropdown">
                    <option value="" selected disabled >Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EE">Electrical Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="CBE">Chemical and Biochemical Engineering</option>
                    </select>
                    
                    <select type="text" id="etype" name="etype" class="ui dropdown">
                    <option value="" selected disabled>Employment Type</option>
                    <option value="job">Salaried</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="higher stuies">Higher Studies</option>
                    <option value="Civil Services">Civil Services</option>
                    </select>

                    <input type="text" placeholder="Present Employer/Educational Inst." name="presentEmployer" required="">
                    
                    <input type="text" placeholder="Designation" name="designation" required="">
                    
                    <textarea type="text" name="address" required="" placeholder="Address"></textarea>
                    
                    <input type="text" placeholder="Country" name="country" required="">
                    
                    <input type="text" placeholder="State" name="state" required="">
    
                    <input type="text" placeholder="City" name="city" required="">
    
                    <textarea type="text" name="achievements" required="" placeholder="Achievements After Graduation"></textarea>
                    
                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.html"> Login Now!</a></p>
			</div>
		</div>
		
        <!-- copyright -->
        <section id="footer">
		<div class="colorlibcopy-agile">
			<p>|| © SAAR Club || All rights reserved ||</p>
		</div>
        </section>
		<!-- //copyright -->
		
        <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
<script>
function loged()
            {
                console.log("Facebook connection established....");
                logins();
            }
              function logins(){  FB.login(function(response) {
                console.log('Welcome!  Fetching your information.... ');
                if (response.authResponse) {
                 console.log('Welcome!  Fetching your information.... ');
                 FB.api('/me', {fields: 'first_name,last_name,email'
             },function(response) {
                    console.log("done");
                   document.getElementById("fname").value = response.first_name;
                   document.getElementById("lname").value = response.last_name;
                   document.getElementById("email").value = response.email;
                 });
                } else {
                 alert('An error occured. Please try again later.');
                }
            },{scope: "email"});}
            function alertemail()
            {
                console.log("done");
                alert("Email Id used is already registered.")
            }
            function alertroll()
            {
                console.log("done");
                alert("Roll No. used is already registered.")
            }
            function alertboth()
            {
                console.log("working");
                alert("Email Id and Roll No. used is already registered.")
            }
window.onload = function(){
        <?php
        //echo 'console.log('.$_GET["type"].');';
           if($_GET["type"] && strcmp($_GET["type"],'fblogin')==0)
           {
            echo 'setTimeout("loged()", 3000);console.log("pp");' ; 
           }
            if(isset($_SESSION['rolldup']) && $_SESSION['rolldup'] == true && isset($_SESSION['emaildup']) && $_SESSION['emaildup'] == true)
            {

                echo 'setTimeout("alertboth()", 1000); console.log("working");';
                $_SESSION['rolldup']=false;
                $_SESSION['emaildup']=false;   
                unset($_SESSION['emaildup']);
                unset($_SESSION['rolldup']);
            }
            else if(isset($_SESSION['emaildup']) && $_SESSION['emaildup'] == true)
            {

                echo 'setTimeout("alertemail()", 1000); console.log("working");';
                $_SESSION['emaildup']=false;
                unset($_SESSION['emaildup']);   
            }
            else if(isset($_SESSION['rolldup']) && $_SESSION['rolldup'] == true)
            {

                echo 'setTimeout("alertroll()", 1000); console.log("working");  ';
                $_SESSION['rolldup']=false;
                unset($_SESSION['rolldup']);   
            }
        ?>
}
</script>
</body>

</html>