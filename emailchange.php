<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
include('connection.php');
        $email = $_SESSION['email'];
        $password = sha1($_POST['password']);
        $newEmail = $_POST['newEmail'];
        $result = mysqli_query($dbc,"SELECT password FROM user WHERE 
        email='$email' AND password='$password'");
        if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
        $sql=mysqli_query($dbc,"UPDATE user SET email='$newEmail' WHERE email='$email'");
        if($sql)
        {
            $_SESSION['email']=$newEmail;
            header("location: changeEmail.php?status=success");
        }
        }else{
          header("location: changeEmail.php?status=wrongpass");
        }
    }
?>