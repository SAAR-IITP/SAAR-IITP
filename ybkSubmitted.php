<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: signin.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Forms Submission Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->


    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/light-box.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">


    <script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=224254148413683" id="facebook-jssdk"></script>
    <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
    <script src="./js/forms.js"></script>

    <style>
        body {
            background: #EEFBFF;
            background: url('img/bggg.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            /* transform: translate(50%, 50%); */
            text-align: center;
            margin: 30px;
            width: 50vh;
            height: 50vh;
            transform: translateY(calc(calc(50%) - calc(30px)));
            background: #bdf0ff;
            display: flex;
            align-items: center;
            flex-direction: column;
            border-radius: 5px;
            min-width: 275px;
            min-height: 275px;
        }

        .container h2 {
            font-size: 20px;
        }

        .container img {
            width: 25%;
            height: auto;
            margin: 10%;
        }

        .container .btn {
            display: inline-block;
            background-color: #75d3ed;
            border-radius: 0%;
            color: white;
            margin: 15% 10% 10% 10%;
            width:  30%;
        }

        .container .btn:active, .container .btn:focus {
            border-radius: 0%;
            outline: none;
            background-color: #75d3ed;
        }

        .container .btn:hover {
            background-color: #30a5c7;
        }

        
    </style>


</head>

<body>

    <div class="container">
        <img src="img/checkmark.png" alt="success">
        <h2>The form has been submitted sucessfully!</h2>
        <a href="./portal.php" class="btn">Back</a>
    </div>


</body>

</html>

