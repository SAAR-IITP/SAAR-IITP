<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>SAAR | Discussion Forum</title>    
         
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/chat.css" />
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="./js/upload.js"></script>    
    </head>
    <style>
    .nav-item {
        margin: 5px 10px;
    }
    </style>
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
                    $('#result').html(data);
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
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){ ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newpost">
            Add new post
            </button>
            </li>
            <li class="nav-item">
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
    

        <div class="container" style="padding-bottom:15px;">
            <?php if(isset($_SESSION['msg'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" style="position: fixed;top: 30px;left: 45%;z-index:10;" role="alert">
                    <?php echo $_SESSION['msg']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php         ;
                unset($_SESSION['msg']);
            } ?>
            <div class="modal fade" id="newpost" tabindex="-1" role="dialog" aria-labelledby="newpostLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newpostLabel">ADD A POST</h5>
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
                                <textarea name="body" class="form-control" id="body" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <!-- <label for="cat">Category ID</label> -->
                                <input type="number" class="form-control" id="cat" name="cat_id" placeholder="Enter cat id" value="1" hidden required>
                            </div>
                            <!-- <div class="form-group">
                            <small>First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 1MB.</small>
                            <div id="filediv"><input name="file[]" class="form-control" type="file" id="file"/></div>
                            </div>
                            <div class="form-group">
                            <input type="button" id="add_more" class="btn btn-info btn-sm" value="Add More Files"/>
                            </div> -->
                            <input type="number" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" name="user_id" hidden>
                            <input type="text" id="user_name" name="user_name" value="<?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?>" hidden >
                            <input type="text" id="user_img" name="user_img" value="<?php echo $_SESSION['img_url']; ?>" hidden >
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Post</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
            <div id="result" style="padding-top:15px;">
                <div style="padding: 20px; width:100%;" class="text-center">Loading..</div>
            </div>
            <button id="load_more" class="btn btn-lg btn-primary">Load More</button>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>