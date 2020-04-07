<?php 
    session_start();
    if(!isset($_GET['q'])){
        header("location: chat.php");
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>SAAR | Disscussion Forum</title>    
         
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/chat.css" />
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <style>
        .nav-item {
            margin: 5px 10px;
        }
        </style>
        <script type="text/javascript">
            var $_GET = {};
                if(document.location.toString().indexOf('?') !== -1) {
                    var query = document.location
                                .toString()
                                // get the query string
                                .replace(/^.*?\?/, '')
                                // and remove any existing hash string (thanks, @vrijdenker)
                                .replace(/#.*$/, '')
                                .split('&');

                    for(var i=0, l=query.length; i<l; i++) {
                    var aux = decodeURIComponent(query[i]).split('=');
                    $_GET[aux[0]] = aux[1];
                    }
                }
            $(document).ready(function(){
                $.ajax({
                    type: "GET",
                    url: "postdata.php",
                    data: {
                        'post_id': $_GET['q']
                    },
                    success: function(data){
                        $('#result').append(data);
                    }
                });
                $("#refresh").on("click",function(){
                    $.ajax({
                    type: "GET",
                    url: "postdata.php",
                    data: {
                        'post_id': $_GET['q']
                    },
                    success: function(data){
                        $('#result').html(data);
                    }
                    });
                });
                $("#add_comment").on("click",function(){
                    let bodyval = $('#comment_body').val();
                    $('#comment_body').val('');
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/Saar-Server/functions/createReply.php",
                        data: {
                            "user_id": 3,
                            "post_id":$_GET['q'],
                            "body": bodyval
                        },
                        success: function(data){
                            console.log(data);
                        }
                    });
                });
            });
        
            function autoRefresh_div()
            {
                $.ajax({
                    type: "GET",
                    url: "postdata.php",
                    data: {
                        'post_id': $_GET['q']
                    },
                    success: function(data){
                        $('#result').html(data);
                    }
                });// a function which will load data from other file after x seconds
                // $("#result").append("hil<br>");
            }
            
            // setInterval('autoRefresh_div()', 2000);
        </script> 
    </head>
    <body style="height:100%;width:100%">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        
        <a class="navbar-brand" href="#"><img src="img/logo1.png" alt="SAAR" style="height: 90px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin: 10px auto;">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a href="./chat.php"><button type="button" class="btn btn-primary" >
            All Posts
            </button></a>
            </li>
            <li class="nav-item">
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){ ?>
                <a href="./portal.php"><button type="button" class="btn btn-primary">
                Profile
                </button></a>
            <?php }else{ ?>
                <a href="./signin.php"><button type="button" class="btn btn-primary">
                Login
                </button></a>
            <?php } ?>
            </li>
            </ul>
        </div>
        </div>
    </nav>
        <div class="container">
            <div id="result" style="padding-top:15px;">
            <?php
            //     $post_id = $_GET['q'];
            //     $url = './postdata.php?post_id='.$post_id;
            //    include($url);
            ?>
            </div>
            
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 res"> 
                        <img src="img/abhi.jpg" class="profile_image" ></img>
                        <div class="username"><strong>Abhinav Gyan</strong></div>
                    </div>
                    <div class="col-lg-11 col-sm-10">
                    <input type="text" class="form-control mb-3" placeholder="Add a comment..." id="comment_body">
                    <span class="input-group-btn">
                        <button class="btn btn-info " type="button" id="add_comment">POST</button>
                    </span>
                        <hr style="margin-top:10px">
                        
                    </div>
                </div>
                
            </div>
            <br><br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>