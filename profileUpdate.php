<?php
session_start();
include('connection.php');
 if($_SERVER["REQUEST_METHOD"] == "POST") {
 		$email=$_SESSION['email'];
 		$first_name=$_POST['fname'];
 		$last_name=$_POST['lname'];
 		$contact=$_POST['contact'];
 		$fbId=$_POST['fbId'];
 		$linkden=$_POST['linkden'];
 		$dob=$_POST['DOB'];
 		$year=$_POST['passingyear'];
 		$degree=$_POST['degree'];
 		$dept=$_POST['dept'];
 		$etype=$_POST['etype'];
 		$empl=$_POST['presentEmployer'];
 		$desg=$_POST['designation'];
 		$addr=$_POST['address'];
 		$city=$_POST['city'];
 		$state=$_POST['state'];
 		$country=$_POST['country'];
 		$ach=$_POST['achievements'];
        $sql=mysqli_query($dbc,"UPDATE user SET first_name='$first_name',last_name='$last_name',contact_no='$contact',fb_id='$fbId',linkden='$linkden',DOB='$dob',graduation_year='$year',degree='$degree',department='$dept',employment_type='$etype',present_employer='$empl',designation='$desg',address='$addr',city='$city',state='$state',country='$country',achievement='$ach' WHERE email='$email'");
        $reg=mysqli_affected_rows($dbc);
        if($reg==1)
        {
        header("location: updateProfile.php?status=success");
     }
     else
     {
     	header("location: updateProfile.php?status=error");
     }
 }
     ?>