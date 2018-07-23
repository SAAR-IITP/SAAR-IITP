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
		echo "THANK YOU PAGE WILL OPEN";
	}
?>