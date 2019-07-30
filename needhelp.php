<?php
	session_start();
	include('connection.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$desc=$_POST["description"];
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
	      $mail->SetFrom($_SESSION["email"]);
	      $mail->Subject = $_SESSION["fname"]." ".$_SESSION["lname"]."needs help from SAAR";
	      $mail->Body = "Name:- ".$row['first_name']." ".$row['last_name']."<br><br>Email:- ".$_SESSION['email']."<br><br>".$desc;
	        $mail->AddAddress("saar@gmail.com");
	        if(!$mail->Send()) {
	         $count=1;
	     }
	     $_SESSION["helpsent"]=true;
	     header("location: portal.php"); 
 ?>