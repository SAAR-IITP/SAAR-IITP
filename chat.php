<?php
    session_start();
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
        <script src="./js/upload.js"></script>    
    </head>
    <script type="text/javascript">
    $(document).ready(function(){
        var flag = 0;
        $.ajax({
                type: "GET",
                url: "load.php",
                data: {
                    'offset': 0,
                    'limit': 6
                },
                success: function(data){
                    $('#result').append(data);
                    flag+= 6;
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
                        'limit': 6
                    },
                    success: function(data){
                        if(data != ''){
                            $('#load_more').html('Load More');
                            $('#result').append(data);
                            flag+=6;
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
            <?php 
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                
            ?>
            <h1>CHAT PORTAL</h1>
            <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add new post
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="newPost.php" enctype="multipart/form-data">
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="body">Description</label>
                                <input type="text" class="form-control" id="body" name="body" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                                <label for="cat">Category ID</label>
                                <input type="number" class="form-control" id="cat" name="cat_id" placeholder="Enter cat id" required>
                            </div>
                            <div class="form-group">
                            <small>First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 1MB.</small>
                            <div id="filediv"><input name="file[]" class="form-control" type="file" id="file"/></div>
                            </div>
                            <div class="form-group">
                            <input type="button" id="add_more" class="btn btn-success" value="Add More Files"/>
                            <!-- <input type="submit" value="Upload File" name="submit" id="upload" class="btn btn-success"/> -->
                            </div>
                            <input type="number" value="2" name="user_id" hidden>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
            <div id="result">
            <?php
              // include('load.php')
            ?>
            </div>
            <button id="load_more" class="btn btn-lg btn-primary">Load More</button>
        </div>
    </body>
</html>