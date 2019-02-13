<?php
	session_start();
	$college_id=$_POST['college_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$passwd=$_POST['password'];
	$contact_no=$_POST['contact'];
	$DOB=$_POST['DOB'];
	$fbId=$_POST['fbId'];
	$linkden=$_POST['linkden'];
	$passingyear=$_POST['passingyear'];
	$degree=$_POST['degree'];
	$dept=$_POST['dept'];
	$etype=$_POST['etype'];
	$presentEmployer=$_POST['presentEmployer'];
	$designation=$_POST['designation'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$achievements=$_POST['achievements'];
	$passwd=sha1($passwd);
	include('connection.php');
			  $query = "SELECT college_id FROM user WHERE email = '$email'";
			  $query1 = "SELECT email FROM user WHERE college_id = '$college_id'";
              $result = mysqli_query($dbc,$query);
              $result1 =  mysqli_query($dbc,$query1);
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
              $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
              $count = mysqli_num_rows($result);
              $count1 = mysqli_num_rows($result1);
              // If result matched $myusername and $mypassword, table row must be 1 row
              if($count+$count1	 == 0) {
                 mysqli_query($dbc,"INSERT INTO user(college_id,first_name,last_name,contact_no,email,fb_id,linkden,DOB,password,graduation_year,degree,department,employment_type,present_employer,designation,address,city,state,country,achievement,date_of_registration) VALUES('$college_id','$fname','$lname','$contact_no','$email','$fbId','$linkden','$DOB','$passwd','$passingyear','$degree','$dept','$etype','$presentEmployer','$designation','$address','$city','$state','$country','$achievements',NOW())");
				$registered=mysqli_affected_rows($dbc);
				//echo $registered." row is affected, everything worked fine!";
				if($registered==1)
				{
					//echo "Registration Complete";
				}
					require_once('PHPMailer_5.2.0/class.phpmailer.php');
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(true);
				$mail->Username = "vatsal.eliot@gmail.com";
				$mail->Password = "mkaqaumuchffjcmh";
				$mail->SetFrom("SAAR-IITP@gmail.com");
				$mail->Subject = "Welecome to SAAR";
				$mail->Body = "Hi ".$fname." ".$lname.",<br><br>It is my pleasure to welcome you to our website, where you can feel right at home. In this website, you can be active and engaged members of the community, reconnect with your classmates and keep up to date about alumni events.<br><br>We would look forward to your continued interaction and association to help improve the quality of our Academic programme, industry collaborations and various facets of our operations to ensure continuous improvements and exemplary standards of services to our present and past student community. Our alumni have played an important role in building the credibility of our College and have contributed immensely to the growth of the college. The alumni continue to bring laurels to our college. The SAAR team on its part is keen to strengthen the bonds with its alumni. Our new website has features that will ensure that alumni can register themselves and keep appraised of various activities. Your active participation, and support in the activities of the SAAR and the website will help us work together to take IIT Patna forward in the years to come. We also look forward to feedback and suggestions from alumni on the website to carry forward this initiative. It is just a small step to bringing the alumni closer to their past. Please pass the word around to your friends and batch mates to go to our website and register in order to enjoy the benefits of keeping in touch. The SAAR organizes meetings and get together and publish on-line newsletters with the support of the college, thus strengthening and re-kindling the sense of community and companionship.<br><br>Regards,<br>Team SAAR<br>IIT Patna";
				$mail->AddAddress($email);
						
				 if(!$mail->Send()) {
				    //echo "Mailer Error: " . $mail->ErrorInfo;
				 } else {
				    //echo "Message has been sent";
				 }
				 header("location: signin.php");
              }else {
              	if($count==1)
              	{
                	$_SESSION['emaildup'] = true;
                }
                if($count1==1)
                {
                	$_SESSION['rolldup'] = true;	
                }
                header("location: signup.php?type=null");
              }
?>