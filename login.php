<?php
                    session_start();
           include('connection.php');

                $error="";
           if($_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
              
              $myusername = mysqli_real_escape_string($dbc,$_POST['email']);
              $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
              
              $sql = "SELECT college_id FROM user WHERE email = '$myusername' and password = '$mypassword'";
              $result = mysqli_query($dbc,$sql);
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
              
              $count = mysqli_num_rows($result);
              if($count == 1) {
                 $_SESSION['login_user'] = $myusername;
                 $_SESSION['loggedin'] = true;
                 header("location: portal.php");
              }else {
                $_SESSION['loginfail'] = true;
                header("location: index.php");
              }
           }
?>