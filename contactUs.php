<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$url = 'http://api.saar.iitp.ac.in/help.php';
		$ch = curl_init($url);
		$data = array(
			'name'=> $_SESSION['fname'],
			'useremail'=> $_SESSION['email'],
			'subject'=> $_POST['subject'],
			'body'=> $_POST['message'],
			'access_token' => $_SESSION['access_token']
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
		$_SESSION['msg'] = 'Message Sent Successfully';
	}
	else if($response['status']== 400){		
		$_SESSION['msg'] = $response['message'];
	}
	else $_SESSION['msg'] = 'Something Went Wrong';
	header("location: portal.php");
	}
?>
