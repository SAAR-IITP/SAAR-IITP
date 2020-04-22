<?php
    session_start();
    if($_POST['what'] == "post"){
        $url = 'http://localhost/SAAR-Server/postvote.php';
        $ch = curl_init($url);
        $data = array(
        'post_id' => $_POST['post_id'],
        'user_id' => $_POST['user_id'],
        'upordown' => $_POST['upordown'],
        'access_token' => $_SESSION['access_token']
      );
    }
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
	   

    if($response['status'] == 200 || $response['status'] == 408){
    
        
    }
	
	
				 
?>