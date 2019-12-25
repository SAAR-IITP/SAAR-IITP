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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>   
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
            <div id="result">
            <?php
            //     $post_id = $_GET['q'];
            //     $url = './postdata.php?post_id='.$post_id;
            //    include($url);
            ?>
            </div>
            <button id="refresh" class="btn btn-lg btn-primary">Refresh</button>
        </div>
    </body>
</html>