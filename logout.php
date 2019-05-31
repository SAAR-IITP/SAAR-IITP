<?php
	session_start();
		 unset($_SESSION['fname']);
         unset($_SESSION['lname']);
         unset($_SESSION['cid']);
         unset($_SESSION['contact']);
         unset($_SESSION['fb']);
         unset($_SESSION['graduation']);
         unset($_SESSION['degree']);
         unset($_SESSION['dept']);
         unset($_SESSION['linkden']);
         unset($_SESSION['dob']);
         unset($_SESSION['cid']);
         unset($_SESSION['email']);
         unset($_SESSION['loggedin']);
         header("location: index.php");
?>