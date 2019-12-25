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
    </head>
    <script type="text/javascript">
    $(document).ready(function(){
        var flag = 0;
        $.ajax({
                type: "GET",
                url: "load.php",
                data: {
                    'offset': 0,
                    'limit': 3
                },
                success: function(data){
                    $('#result').append(data);
                    flag+= 3;
                }
            });
        $("#load_more").on("click", function() {
            // if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                // when scroll to bottom of the page
                $("#load_more").html("Loading..");
                $.ajax({
                    type: "GET",
                    url: "load.php",
                    data: {
                        'offset': flag,
                        'limit': 3
                    },
                    success: function(data){
                        if(data != ''){
                            $('#load_more').html('Load More');
                            $('#result').append(data);
                            flag+=3;
                        }else{        
                            $('#load_more').html('Nothing more');
                        }
                        
                    }
                });
            // }
        });
        
    });
    
    
    </script>
    
    <body>
        <div class="container">
            <h1>CHAT PORTAL</h1>
            <hr>
            <div id="result">
            <?php
              // include('load.php')
            ?>
            </div>
            <button id="load_more" class="btn btn-lg btn-primary">Load More</button>
        </div>
    </body>
</html>