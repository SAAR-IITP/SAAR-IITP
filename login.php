<?php
   session_start();
   include('connection.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $myusername = mysqli_real_escape_string($dbc,$_POST['email']);
      $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
      $mypassword=sha1($mypassword);
      $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($dbc,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
      
      $count = mysqli_num_rows($result);
      if($count) 
      {
         $_SESSION['fname']=$row['first_name'];
         $_SESSION['lname']=$row['last_name'];
         $_SESSION['cid']=$row['college_id'];
         $_SESSION['contact']=$row['contact_no'];
         $_SESSION['fb']=$row['fb_id'];
         $_SESSION['graduation']=$row['graduation_year'];
         $_SESSION['degree']=$row['degree'];
         $_SESSION['dept']=$row['department'];
         $_SESSION['linkden']=$row['linkden'];
         $_SESSION['dob']=$row['DOB'];
         $_SESSION['cid']=$row['college_id'];
         $_SESSION['email'] = $myusername;
         $_SESSION['loggedin'] = true;
         header("location: portal.php");
      }
      else 
      {
        $_SESSION['loginfail'] = true;
        header("location: signin.php");
      }
   }
?>