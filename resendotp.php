<?php
    session_start();
    if(isset($_POST['rollno'])){
        $_SESSION['cid'] = $_POST['rollno'];
    }
    if(isset($_SESSION['cid'])){
        $url = 'http://api.saar.iitp.ac.in/resendOTP.php';
        $ch = curl_init($url);
        $data = array(
        'rollno' => $_SESSION['cid'],
        'access_token' => $_SESSION['access_token']
        );
        $payload = http_build_query($data);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($result,true);
        if($response['status'] == 401 || $response['status'] == 201){
            $_SESSION['msg'] = $response['messages'][0];
            header("location: enterotp.php");
        } 
      }else{
        header("location:enterroll.php");
      }

?>