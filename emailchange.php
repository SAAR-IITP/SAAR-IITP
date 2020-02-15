<?php
session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") 
{  
  $url = 'https://saar.iitp.ac.in/api/functions/changeEmail.php';
  $ch = curl_init($url);
  $data = array(
    'old_email' => $_SESSION['email'],
  'new_email' => $_POST["newEmail"],
  'password' => $_POST["password"],
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
  echo '<pre>' . print_r($result, true) . '</pre>';
  // echo $response['messages'][0];

  $row = $response['messages'];
  if($response['status'] == 403){
    $_SESSION['error'] = $row[0];
    header("location:changeEmail.php");
  }else if($response['status'] == 203){
    $_SESSION['msg'] = $row[0];
    header("location:enterotp.php");
  }
}
?>