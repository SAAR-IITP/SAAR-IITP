<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: ./index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Update Profile</title>
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
    .label_style {
        text-align: left;
        margin-bottom: 10px;
        text-transform: uppercase;
    }
</style>
</head>
<body>
	<!-- main -->
    
	<div class="main-w3layouts wrapper">
            <div class="section-heading">
                <h1 class="header1"><span style="font-size: 50px; background: #E4F9FF; text-align: center;">SAAR <em>Profile Update Form</em></span></h1>
            </div>
            <?php
                if(isset($_SESSION['error'])){
                    echo"<div class='message-beauty'>".$_SESSION['error']."</div>";
                }
                unset($_SESSION['error']);
            ?>

        <div class="main-agileinfo"> 
			<div class="agileits-top">
				<form action="profileUpdate.php" method="post">
                    <div class="label_style">First Name</div>
                    <input class="text" type="text" name="fname" value=<?php echo $_SESSION['fname'];?> disabled>
                    <div class="label_style">Last Name</div>
                    <input class="text" type="text" name="lname" value=<?php echo $_SESSION['lname'];?> disabled>
                    <div class="label_style">Contact Number *</div>
                    <input class="text" type="tel" name="contact" placeholder="Contact no." value=<?php echo $_SESSION['contact'];?> required>
                    <div class="label_style">About</div>
                    <textarea type="text" name="about"><?php echo $_SESSION['about']?></textarea>
                    <div class="label_style">Facebook Profile Link</div>
                    <input class="text" type="text" name="fbId" placeholder="Optional" value=<?php echo $_SESSION['fb'];?> >
                    <div class="label_style">Linkedin Profile Link</div>
                    <input class="text" type="text" name="linkden" placeholder="Optional" value=<?php echo $_SESSION['linkden'];?> >
                    <div class="label_style">Date of birth </div>
                    <input class="text" type="date" name="DOB" required onfocus="(this.type='date')" value=<?php echo $_SESSION['dob'];?> disabled>
                    <i class="ui calendar icon"></i>
                    <div class="label_style">Graduation Year</div>
                    <input class="text" type="text" name="passingyear" placeholder="Graduation Year(20XX)" value=<?php echo $_SESSION['graduation'];?> disabled>
                    <div class="label_style">Degree</div>
                    <select type="text" id="degree" name="degree" class="ui search selection  dropdown" disabled>
                    <option value=<?php echo $_SESSION['degree'];?> selected ><?php echo $_SESSION['degree'];?></option>
                    <option value="B.Tech">B.Tech/B.E</option>
                    <option value="M.Tech">M.Tech/M.E</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="P.hd">P.hd</option>
                    </select>
                    <div class="label_style">Department</div>
                    <select type="text" id="branch" name="dept" class="ui search selection   dropdown" disabled>
                    <option value=<?php echo $_SESSION['dept'];?> selected ><?php echo $_SESSION['dept']?></option>
                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Chemical and Biochemical Engineering">Chemical and Biochemical Engineering</option>
                    </select>
                    <div class="label_style">Employment Type</div>
                    <select type="text" id="etype" name="etype" class="ui dropdown">
                    <option value=<?php echo $_SESSION['employment_type'];?> selected ><?php echo $_SESSION['employment_type'];?></option>
                    <option value="Salaried">Salaried</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="Higher Studies">Higher Studies</option>
                    <option value="Civil Services">Civil Services</option>
                    </select>
                    <div class="label_style">Present Employer/Educational Inst.</div>
                    <input type="text" name="presentEmployer" value="<?php echo $_SESSION['present_employer'];?>" >
                    <div class="label_style">Designation</div>
                    <input type="text" name="designation" value="<?php echo $_SESSION['designation'];?>" >
                    <div class="label_style">Address *</div>
                    <textarea type="text" name="address" required="" ><?php echo $_SESSION['address']; ?></textarea>
                    <div class="label_style">Country *</div>
                    <input type="text" name="country"  value="<?php echo $_SESSION['country']; ?>" required>
                    <div class="label_style">State *</div>
                    <input type="text" name="state" value="<?php echo $_SESSION['state'];?>" required>
                    <div class="label_style">City *</div>
                    <input type="text" name="city" value="<?php echo $_SESSION['city'];?>" required>
                    
                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="UPDATE">
                </form>
                <a href="./portal.php"><button style="font-size: .9em;
                    color: #fff;
                    background: #003C4D;
                    outline: none;
                    border: 1px solid #003C4D;
                    cursor: pointer;
                    padding: 0.9em;
                    -webkit-appearance: none;
                    width: 100%;
                    margin: 2em 0;
                    letter-spacing: 4px;">BACK</button></a>
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
</body>

</html>