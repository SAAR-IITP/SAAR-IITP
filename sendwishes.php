<?php
                    session_start();
           include('connection.php');
                  date_default_timezone_set('Asia/Kolkata');
                $day =date('d');
                $month=date('m');
           if($_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
              
              $myusername = mysqli_real_escape_string($dbc,$_POST['user']);
              $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
              if($myusername=="admin" && $mypassword=="12345")
              {
                $sql = "SELECT email,first_name,last_name FROM user WHERE MONTH(DOB) = '$month' and DAY(DOB) = '$day'";
                $result = mysqli_query($dbc,$sql);
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                  require_once('PHPMailer_5.2.0/class.phpmailer.php');
                  $mail = new PHPMailer(); // create a new object
                  $mail->IsSMTP(); // enable SMTP
                  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                  $mail->SMTPAuth = true; // authentication enabled
                  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                  $mail->Host = "smtp.gmail.com";
                  $mail->Port = 465; // or 587
                  $mail->IsHTML(true);
                  $mail->Username = "vatsal.eliot@gmail.com";
                  $mail->Password = "mkaqaumuchffjcmh";
                  $mail->SetFrom("SAAR-IITP@gmail.com");
                  $mail->Subject = "Team SAAR wishes you a HAPPY BIRTHDAY";
                  $mail->Body = "Hi ".$row['first_name']." ".$row['last_name'].",<br>Our sincerest wishes from team SAAR on your birthday. May all your dreams come true! We are looking forward to continuing our relationship with you this year.On your special day, we just wanted to let you know that we consider ourselves very lucky to have gotten the opportunity to be with you. From all of us at team SAAR We wish you nothing but fulfillment and happiness on this special day! May you be blessed with sound health and enormous wealth in the coming years!<br>It’s with great fondness that we once again wish you the best birthday ever.<br><br>Regards,<br>Team SAAR<br>IIT Patna";
                    $mail->AddAddress($row['email']);
                    if(!$mail->Send()) {
                     $count=1;
                 } 
                }
                
                $count = mysqli_num_rows($result);
                echo $count." wishes sent";
              }
           }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Send Birthday Wishes</title>
</head>
<body>
    <form method="post" action="">  
    <input type="text" name="user" required>
    <input type="password " name="password" required>
    <input type="submit">
    </form>
</body>
</html>