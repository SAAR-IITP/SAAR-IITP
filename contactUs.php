<?php
	session_start();
	echo implode(' ', $_SESSION);
	$_SESSION['contact'] = 'T';
	echo 'sub'.$_POST['subject'].'\n';
	echo 'mes'.$_POST['message'];

	$url = 'localhost/saar-server/functions/help.php';
		$ch = curl_init($url);
		$data = array(
			'name'=> $_SESSION['fname'],
			'useremail'=> $_SESSION['email'],
			'subject'=> $_POST['subject'],
			'body'=> $_POST['message']
		);
		$payload = http_build_query($data);

		curl_setopt($ch, CURLOPT_POST, true);
		//attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		//return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//execute the POST request
		$result = curl_exec($ch);
		//close cURL resource
		curl_close($ch);

		$response = json_decode($result,true);
		

	if($response['status'] == 202){
		$_SESSION['contact'] = 'true';
	}
	else if($response['status']== 400){		
		$_SESSION['contact'] = $response['message'];
	}
	else $_SESSION['contact'] = 'Something Went Wrong';

	header("location: portal.php");
?>