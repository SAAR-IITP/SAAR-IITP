 <?php
session_start();
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
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
        {
            echo 'window.location = "noaccess.php";';
        }
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
   <form method="POST" action="passchange.php">
    <table>
    <input name="email" hidden value=<?php$_SESSION['email']?>>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="50" name="password" required></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="50" name="newpassword" required></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="50" name="confirmnewpassword" required></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
   <p><a href="portal.php">Home</a>
   <p><a href="logout.php">Logout</a>
   </body>
</html> 