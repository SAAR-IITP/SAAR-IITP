<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {  
      // $url = 'https://saar-server.000webhostapp.com/functions/login.php';
      $url = 'https://saar.iitp.ac.in/api/functions/login.php';
      $ch = curl_init($url);
      $data = array(
       'email' => $_POST["email"],
       'password' => $_POST["password"]
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
      
      
      // $myusername = mysqli_real_escape_string($dbc,$_POST['email']);
      // $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
      // $mypassword=sha1($mypassword);
      // $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";
      // $result = mysqli_query($dbc,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
      
      // $count = mysqli_num_rows($result);
      /*$response = json_decode(file_get_contents('php://input'), true);*/
      $response = json_decode($result,true);
    // echo '<pre>' . print_r($result, true) . '</pre>';
      echo $response['messages'][0];
    
    $row = $response['messages'];
    // $row = $response["message"];
    // echo $response;
      if($response["status"]==202) 
      {  
         $_SESSION['fname']=$row['first_name'];
         $_SESSION['lname']=$row['last_name'];
         $_SESSION['cid']=$row['rollno'];
         $_SESSION['contact']=$row['phone'];
         $_SESSION['fb']=$row['fb_link'];
         $_SESSION['graduation']=$row['graduation_year'];
         $_SESSION['degree']=$row['degree'];
         $_SESSION['dept']=$row['department'];
         $_SESSION['linkden']=$row['linkdin_link'];
         $_SESSION['dob']=$row['dob'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['img_url'] = $row['img_url'];
         $_SESSION['employment_type']=$row['employment_type'];
         $_SESSION['present_employer']=$row['present_employer'];
         $_SESSION['designation']=$row['designation'];
         $_SESSION['address']=$row['address'];
         $_SESSION['country']=$row['country'];
         $_SESSION['state']=$row['state'];
         $_SESSION['city']=$row['city'];
         $_SESSION['achievements']=$row['achievements'];
         $_SESSION['loggedin'] = true;
         $_SESSION['access_token'] = $row['access_token'];
         header("location: portal.php");
      }
      else 
      {
        $_SESSION['loginfail'] = true;
        $_SESSION['error'] = $row[0];
        header("location: signin.php");
      }
   }
?>