<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: noaccess.php");
    }
    // $email=$_SESSION['email'];
    // include('connection.php');
    // $sql = "SELECT * FROM user WHERE email='$email'";
    // $result = mysqli_query($dbc,$sql);
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Update Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
    
<link type="text/css"  rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="css/templatemo-style.css">
<script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=224254148413683" id="facebook-jssdk"></script><script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
    <style>
    .section-heading h1{
        display: block !important;
        margin-right: 0px;
    }
    .section-heading h1 span{
            font-size: 50px; 
            background: #E4F9FF; 
            text-align: center;
            padding: 8px 12px;
        }
    @media screen and (max-width:695px){
        .section-heading h1 span{
            font-size: 32px;
        }
    }
    @media screen and (max-width:477px){
        .section-heading h1 span{
            font-size: 24px;
        }
    }
    
    body {
            background: #EEFBFF;
            background: url('img/bggg.png');
            background-size: cover;
            font-family: 'Montserrat' Semibold ;
        }
</style>
</head>
<body>
	<!-- main -->
    
	<div class="main-w3layouts wrapper">
            <div class="section-heading">
                <h1 class="header1"><span style="font-size: 50px; background: #E4F9FF; text-align: center;">SAAR <em>Profile Update Form</em></span></h1>
            </div>

        <div class="main-agileinfo"> 
			<div class="agileits-top">
				<form action="profileUpdate.php" method="post">
                    <input class="text" type="text" name="fname" placeholder="First Name" value=<?php echo $_SESSION['fname'];?> disabled>
                    <input class="text" type="text" name="lname" placeholder="Last Name" value=<?php echo $_SESSION['lname'];?> disabled>
                    <input class="text" type="tel" name="contact" placeholder="Contact no." value=<?php echo $_SESSION['contact'];?> required>
                    <input class="text" type="text" name="fbId" placeholder="Facebook Profile Link(optional)" value=<?php echo $_SESSION['fb'];?> >
                    <input class="text" type="text" name="linkden" placeholder="Linkden Profile Link(optional)" value=<?php echo $_SESSION['linkden'];?> >
                    <input class="text" type="date" name="DOB" placeholder="Date of Birth" required onfocus="(this.type='date')" value=<?php echo $_SESSION['dob'];?> disabled>
                    <i class="ui calendar icon"></i>
                    
                    <input class="text" type="text" name="passingyear" placeholder="Graduation Year(20XX)" value=<?php echo $_SESSION['graduation'];?> disabled>
                    
                    <select type="text" id="degree" name="degree" class="ui search selection  dropdown" disabled>
                    <option value=<?php echo $_SESSION['degree'];?> selected ><?php echo $_SESSION['degree'];?></option>
                    <option value="B.Tech">B.Tech/B.E</option>
                    <option value="M.Tech">M.Tech/M.E</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="P.hd">P.hd</option>
                    </select>
    
                    <select type="text" id="branch" name="dept" class="ui search selection   dropdown" disabled>
                    <option value=<?php echo $_SESSION['dept'];?> selected ><?php echo $_SESSION['dept']?></option>
                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Chemical and Biochemical Engineering">Chemical and Biochemical Engineering</option>
                    </select>
                    
                    <select type="text" id="etype" name="etype" class="ui dropdown">
                     <option value=<?php echo $_SESSION['employment_type'];?> selected ><?php echo $_SESSION['employment_type'];?></option>
                    <option value="job">Salaried</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="higher stuies">Higher Studies</option>
                    <option value="Civil Services">Civil Services</option>
                    </select>

                    <input type="text" placeholder="Present Employer/Educational Inst." name="presentEmployer" value="<?php echo $_SESSION['present_employer'];?>" required>
                    
                    <input type="text" placeholder="Designation" name="designation" value="<?php echo $_SESSION['designation'];?>" required>
                    
                    <textarea type="text" name="address" required="" placeholder="Address"><?php echo $_SESSION['address']; ?></textarea>
                    
                    <input type="text" placeholder="Country" name="country"  value="<?php echo $_SESSION['country']; ?>" required>
                    
                    <input type="text" placeholder="State" name="state" value="<?php echo $_SESSION['state'];?>" required>
    
                    <input type="text" placeholder="City" name="city" value="<?php echo $_SESSION['city'];?>" required>
    
                    <textarea type="text" name="achievements" placeholder="Achievements After Graduation"><?php echo $_SESSION['achievements']; ?></textarea>
                    
                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="UPDATE">
				</form>
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
function alertSuc()
{
    console.log("done");
    alert("Profile Updated.");
}
function alertErr()
{
    console.log("done");
    alert("Error, Please try again later.");
}
window.onload = function(){
       <?php
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
        {
          echo 'window.location = "noaccess.php";';
        }
         if($_GET['status']=="success")
        {
            echo 'setTimeout("alertSuc()", 300);'; 
        }
        if($_GET['status']=="error")
        {
            echo 'setTimeout("alertErr()", 300);';
        }
    ?>
}
</script>
</body>

</html>