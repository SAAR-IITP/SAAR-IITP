<?php
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	echo $email;
	include('connection.php');
	mysqli_query($dbc,"INSERT INTO contactInfo(name,contact,email) VALUES('$name','$contact','$email')");
	$registered=mysqli_affected_rows($dbc);
	//echo $registered." row is affected, everything worked fine!";
	if($registered==1)
	{
		echo "Registration Complete";
	}
	require 'PHPMailer\PHPMailer.php';
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "vatsal.eliot@gmail.com";
$mail->Password = "cartoon11";
$mail->SetFrom("example@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress($email);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
				$mail->Body    = "Hello ".$name;

?>