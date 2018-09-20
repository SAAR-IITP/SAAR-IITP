<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        include('connection.php');
        $email = $_SESSION['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($dbc,"SELECT password FROM user WHERE 
        email='$email' AND password='$password'");
        if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {        
        if($newpassword==$confirmnewpassword)
        {$sql=mysqli_query($dbc,"UPDATE user SET password='$newpassword' WHERE email='$email' AND password='$password'");
        if($sql)
        {
            header("location: changePassword.php?status=success");
        }}
       else
        {
            header("location: changePassword.php?status=nomatch");   
       }}
       else{
           header("location: changePassword.php?status=wrongpass");
       }
   }?>