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
                <i class="fa fa-clock-o"></i> Posted on: '.$data['post_time'][0].' at '.$data['post_time'][1].' | '.$data['no_of_comment'].' comments
                </div>
                <div class="btns">
                
                <button id="refresh" class="btn btn-md btn-secondary">Refresh</button>
                </div>
            </div>
            <hr style="margin-top: 50px;">
            <div class="jumbotron">
            <div class="row">
                <div class="col-lg-1 col-sm-2 res"> 
                    <img src="'.$data['user_img'].'" class="profile_image" ></img>
                    <div class="username"><strong>'.$data['user_name'].'</strong></div>
                </div>
                <div class="col-lg-9 col-sm-8">
                    <p class="post_body">'.$data['body'].'</p>
                    <div class="row">';
                    foreach($images as $image){
                        echo '<div class="col-sm-6">
                                    <a target="_blank" href="http://localhost/SAAR-IITP/uploads/'.$image.'" ><img class="pp_img" src="http://localhost/SAAR-IITP/uploads/'.$image.'" alt="Image" ></a>
                                </div>';
                    }

                   
                    if($response['data']['user_id']==$_SESSION['user_id']){
                        echo '</div>
                    <hr style="margin-top:10px">
                    <div class="up" id="upvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-up"></i> '.$data['upvotes'].' 
                    </div>
                    <div class="down" id="downvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-down"></i> '.$data['downvotes'].'
                    </div>
                    <div class="down" id="delete_post" style="display: inline-block; cursor: pointer;">
                        <button class="btn btn-primary">delete</button>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="post_comment"> '.$data['no_of_comment'].' Comments</div>
                    <div class="post_time" style=""><i class="fa fa-clock-o"></i> Posted on: '.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
                </div>
            </div>';

                    }
                    else{
                    echo '</div>
                    <hr style="margin-top:10px">
                    <div class="up" id="upvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-up"></i> '.$data['upvotes'].' 
                    </div>
                    <div class="down" id="downvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-down"></i> '.$data['downvotes'].'
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="post_comment"> '.$data['no_of_comment'].' Comments</div>
                    <div class="post_time" style=""><i class="fa fa-clock-o"></i> Posted on: '.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
                </div>
            </div>';
        }

            echo '</div>
            ';
            $replies = $response['replies'];
            foreach($replies as $reply){
                echo '
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-lg-1 col-sm-2 res"> 
                                <img src="'.$reply['user_img'].'" class="profile_image" ></img>
                                <div class="username"><strong>'.$reply['user_name'].'</strong></div>
                            </div>
                            <div class="col-lg-11 col-sm-10">
                                <p class="post_body">'.$reply['body'].'</p>
                                <hr style="margin-top:10px">
                                <div class="up" id="upvote_comment" data-id="'.$reply['comment_id'].'" style="display: inline-block; cursor: pointer;">
                                    <i class="fa fa-thumbs-up"></i> '.$reply['upvotes'].' 
                                </div>
                                <div class="down" id="downvote_comment" data-id="'.$reply['comment_id'].'" style="display: inline-block; cursor: pointer;">
                                    <i class="fa fa-thumbs-down"></i> '.$reply['downvotes'].'
                                </div>
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
