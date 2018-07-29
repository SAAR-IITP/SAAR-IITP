 <?php
session_start();
include('connection.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password FROM user WHERE 
        email='$email' AND password='$password'");
        if(!$result)
        {
          header("location: changePassword.php?status=wrongpass");
        }
        if($newpassword==$confirmnewpassword)
        $sql=mysql_query("UPDATE user SET password='$newpassword' where email='$email'");
        if($sql)
        {
            header("location: changePassword.php?status=success");
        }
       else
        {
            header("location: changePassword.php?status=nomatch");   
       }
      ?>
<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
    <script type="text/javascript">
      function alertPass(){
        alert("Existing Incorrect Password.");
      }
      function alertNoMatch(){
        alert("The New passwords don't match.");
      }
      function alertSuccess(){
        alert("Password Changed Successfully.")
      }
      window.onload = function(){
        <?php
        if($_GET['status']=="success")
        {
          echo 'setTimeout("alertSuccess()", 300); ';
        }
        else if($_GET['status']=="nomatch")
        {
          echo 'setTimeout("alertNoMatch()", 300); ';
        }
        else if($_GET['status']=="wrongpass")
        {
          echo 'setTimeout("alertPass()", 300);';
        }
        ?>
      }
    </script>
     </head>
    <body>
    <h1>Change Password</h1>
   <form method="POST" action="">
    <table>
    <input name="email" hidden value=<?php$_SESSION['email']?>>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="50" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="50" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="50" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
   <p><a href="portal.php">Home</a>
   <p><a href="logout.php">Logout</a>
   </body>
</html> 