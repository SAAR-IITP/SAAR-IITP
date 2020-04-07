<?php 
    session_start();
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
        $url = 'http://localhost/SAAR-Server/getPostInfo.php?post_id='.$post_id;
        $response = file_get_contents($url);
        // echo $response;
        $response = json_decode($response,true);
        if($response['status']==409){
            echo $response['message'];
        }else if($response['status']==210){
            $data = $response['data'];
            $images = unserialize($data['images']);
            echo '
            <div class="post_heading">'.$data['title'].'</div>
            <div class="subhead" style="">
                <div>
                <i class="fa fa-clock-o"></i> Posted on: '.$data['post_time'][0].' at '.$data['post_time'][1].' | X comments
                </div>
                <div class="btns">
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Edit
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete Post</a>
                    </div>
                </div>
                <button id="refresh" class="btn btn-md btn-secondary">Refresh</button>
                </div>
            </div>
            <hr style="margin-top: 50px;">
            <div class="jumbotron">
            <div class="row">
                <div class="col-lg-1 col-sm-2 res"> 
                    <img src="img/abhi.jpg" class="profile_image" ></img>
                    <div class="username"><strong>Abhinav Gyan</strong></div>
                </div>
                <div class="col-lg-9 col-sm-8">
                    <p class="post_body">'.$data['body'].'</p>
                    <div class="row">';
                    foreach($images as $image){
                        echo '<div class="col-sm-6">
                                    <a target="_blank" href="http://localhost/SAAR-IITP/uploads/'.$image.'" ><img class="pp_img" src="http://localhost/SAAR-IITP/uploads/'.$image.'" alt="Image" ></a>
                                </div>';
                    }
                    echo '</div>
                    <hr style="margin-top:10px">
                    <a href="#" class="up">
                        <i class="fa fa-thumbs-up"></i> '.$data['upvotes'].' 
                    </a>
                    <a href="#" class="down">
                        <i class="fa fa-thumbs-down"></i> '.$data['downvotes'].'
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="post_comment"> X Comments</div>
                    <div class="post_time" style=""><i class="fa fa-clock-o"></i> Posted on: '.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
                </div>
            </div>';
            echo '</div>
            ';
            $replies = $response['replies'];
            foreach($replies as $reply){
                echo '
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-lg-1 col-sm-2 res"> 
                                <img src="img/abhi.jpg" class="profile_image" ></img>
                                <div class="username"><strong>Abhinav Gyan</strong></div>
                            </div>
                            <div class="col-lg-11 col-sm-10">
                                <p class="post_body">'.$reply['body'].'</p>
                                <hr style="margin-top:10px">
                                <a href="#" class="up">
                                    <i class="fa fa-thumbs-up"></i> '.$reply['upvotes'].' 
                                </a>
                                <a href="#" class="down">
                                    <i class="fa fa-thumbs-down"></i> '.$reply['downvotes'].'
                                </a>
                                <span><i class="fa fa-clock-o"></i> Commented on: '.$reply['time'][0].' at '.$reply['time'][1].'</span>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }else{
        echo "Post not found";
    }
?>
