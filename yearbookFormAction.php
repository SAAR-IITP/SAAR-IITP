<?php 
session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $url = 'http://api.saar.iitp.ac.in/yearbookForm.php';
      $ch = curl_init($url);
      
      $data = array(
      'roll_no' => $_SESSION["cid"],
      'first_name' => $_SESSION["fname"],
      'last_name' => $_SESSION["lname"],
      'email' => $_POST["email"],
      'phone' => $_POST["contact"],
      'graduation_year' => $_POST["passingyear"],
      'dept' => $_POST["dept"],
      'dept_other' => $_POST["dept_other"],
      'quote' => $_POST["quote"],
      'comments' => $_POST["comments"]
      );

      // sending portrait pic
      $data['portrait_pic'] = curl_file_create(
         $_FILES['portrait_pic']['tmp_name'],
         $_FILES['portrait_pic']['type'],
         $_FILES['portrait_pic']['name']
      );

      // sending group pics (multiple)
      $nFiles = count($_FILES['group_pic']['name']);
      for ($i = 0; $i < $nFiles; $i++) {
         $temp_name = $_FILES['group_pic']['tmp_name'][$i];
         if ($temp_name != ""){
            $data["group_pic[$i]"] = curl_file_create(
               $_FILES['group_pic']['tmp_name'][$i],
               $_FILES['group_pic']['type'][$i],
               $_FILES['group_pic']['name'][$i]
            );
         }
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
      // echo $result;
      if($response['status'] == 200){
         
         $_SESSION['ybk__roll_no'] = $_POST["roll_no"];
         $_SESSION['ybk__first_name'] = $_POST["fname"];
         $_SESSION['ybk__last_name'] = $_POST["lname"];
         $_SESSION['ybk__email'] = $_POST["email"];
         $_SESSION['ybk__phone'] = $_POST["contact"];
         $_SESSION['ybk__graduation_year'] = $_POST["passingyear"];
         $_SESSION['ybk__dept'] = $_POST["dept"];
         $_SESSION['ybk__dept_other'] = $_POST["dept_other"];
         $_SESSION['ybk__quote'] = $_POST["quote"];
         $_SESSION['ybk__comments'] = $_POST["comments"];

         $_SESSION['ybk__msg'] = $response['messages'][0];
         $_SESSION['ybk__submitted'] = true;
         
         header("location: ybkSubmitted.php");
      }else if($response['status']==400){
         // set error messages
         $_SESSION['error'] = $response['messages'];
         // header("location: yearbookForm.php"); // un comment this in production
         print_r($_SESSION['error'][0]); // remove this in production
      }
   }
?>