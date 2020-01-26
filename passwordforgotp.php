<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = 'http://localhost/SAAR-Server/functions/forgotPassword.php';
      $ch = curl_init($url);
      $data = array(
       'email' => $_POST["email"],
       'rollno' => $_POST['rollno']
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
      if($response['status'] == 204){
      	$_SESSION['msg'] = $response['messages'][0];
         $_SESSION['cid'] = $_POST['rollno'];
         $_SESSION['forget_pass'] = true;
      	header("location: enterotp.php");
      }else if($response['status'] == 404){
      	$_SESSION['error'] = $response['messages'][0];
      	header("location: forgetpass.php");
      }
   }

?>