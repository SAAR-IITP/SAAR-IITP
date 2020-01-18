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
   // echo $result;
   if($response['status'] == 205){
      $_SESSION['contact'] = $_POST["contact"];
      $_SESSION['employment_type'] = $_POST["etype"];
      $_SESSION['present_employer'] = $_POST["presentEmployer"];
      $_SESSION['designation'] = $_POST["designation"];
      $_SESSION['fb'] = $_POST["fbId"];
      $_SESSION['linkden'] = $_POST["linkden"];
      $_SESSION['address'] = $_POST["address"];
      $_SESSION['country'] = $_POST["country"];
      $_SESSION['state'] = $_POST["state"];
      $_SESSION['city'] = $_POST["city"];
      $_SESSION['achievements'] = $_POST["achievements"];
      $_SESSION['msg'] = $response['messages'][0];
      header("location: portal.php");
   }else if($response['status']==400){
      // set error messages
      $_SESSION['error'] = $response['messages'];
      header("location:updateProfile.php");
   }
 }
     ?>