<?php
	session_start();

	$url = 'http://localhost/SAAR-Server/functions/signup.php';
      $ch = curl_init($url);
      $data = array(
      'rollno'=> $_POST['college_id'],
      'first_name'=> $_POST['fname'],
      'last_name'=> $_POST['lname'],
      'phone'=> $_POST['contact'],
      'fb_link'=> $_POST['fbId'],
      'linkedin_link'=>$_POST['linkden'],
       'email' => $_POST["email"],
       'password' => $_POST["password"],
       'confirm_password' => $_POST["con_password"],
       'dob'=>$_POST['DOB'],
       'graduation_year'=>$_POST['passingyear'],
       'degree'=>$_POST['degree'],
       'department'=> $_POST['dept'],
       'employment_type'=> $_POST['etype'],
       'present_employer'=>$_POST['presentEmployer'],
       'designation'=> $_POST['designation'],
       'address'=>$_POST['address'],
       'country'=>$_POST['country'],
       'state'=> $_POST['state'],
       'city'=>$_POST['city'],
       'achievements' => $_POST['achievements']
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
      echo $result;
	
	$response = json_decode($result,true);
	   

	  if($response['status'] == 200){
            // $_SESSION['resend'] = 1;
            $_SESSION['cid'] = $_POST['college_id'];
	  	$_SESSION['msg'] = $response['messages'][0];
            header("location: enterotp.php");
	  }else if($response['status']== 400){
	  	  	foreach ($response['messages'] as $key) {
	  		$_SESSION['error'][] = $key;
	  	}
	  	header("location: signup.php");
	  }
				 
?>