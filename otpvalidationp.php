<?php
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	 $url = "http://api.saar.iitp.ac.in/verifyOTP.php";
	 $ch = curl_init($url);
	 $data = array(
	 	'rollno' => $_POST['rollno'],
       'verification_code' => $_POST['otp'],
       'access_token' => $_SESSION['access_token']
    );
    if(isset($_POST['forget_pass'])){
       $data += array('forgot_password' => $_POST['forget_pass']);
    }
	 $payload = http_build_query($data);
	 curl_setopt($ch, CURLOPT_POST, true);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 $result = curl_exec($ch);
	 curl_close($ch);
      echo $result;

      $response = json_decode($result,true);
      if($response['status'] == 201){
      	$_SESSION['error'] = $response['messages'][0];
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
      	header("location: signin.php");
      }else if($response['status']==208){
         //forget password redirect to set password page
         $_SESSION['cid'] = $response['messages']['rollno'];
         $_SESSION['msg'] = $response['messages']['msg'];
         $_SESSION['forget_pass'] = true;
         header("location: changePassword.php");
      }else{
      	$_SESSION['error'] = $response['messages'][0];
      	header("location: enterotp.php");
      }
  }
?>