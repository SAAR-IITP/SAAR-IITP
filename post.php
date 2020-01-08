<?php 
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
        <title>chat</title>    
         
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
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
            
            setInterval('autoRefresh_div()', 2000);
        </script> 
    </head>
    <body>
        <div class="container">
            <h1>Particular post</h1>
            <hr>
            <button id="refresh" class="btn btn-lg btn-primary">Refresh</button>
            <a href="./chat.php"><button id="back" class="btn btn-lg btn-primary">Back</button></a>
            <div id="result">
            <?php
            //     $post_id = $_GET['q'];
            //     $url = './postdata.php?post_id='.$post_id;
            //    include($url);
            ?>
            </div>
            
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Add a comment..." id="comment_body">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="add_comment">Go!</button>
                </span>
            </div>
            <br><br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>