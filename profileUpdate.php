<?php 
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   $url = 'https://saar-server.000webhostapp.com/functions/updateProfile.php';
   $ch = curl_init($url);
   $data = array(
    'phone' => $_POST["contact"],
    'employment_type' => $_POST["etype"],
    'present_employer' => $_POST["presentEmployer"],
    'designation' => $_POST["designation"],
    'fb_link' => $_POST["fbId"],
    'linkedin_link' => $_POST["linkden"],
    'address' => $_POST["address"],
    'country' => $_POST["country"],
    'state' => $_POST["state"],
    'city' => $_POST["city"],
    'rollno' => $_SESSION["cid"],
    'achievements' => $_POST["achievements"]
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
   echo $response['messages'][0];
   if($response['status'] == 205){
      $_SESSION['msg'] = $response['messages'][0]." Login again to see the changes.";
      header("location: portal.php");
   }else{
      header('locatioin: updateProfile.php');
   }
 }
     ?>