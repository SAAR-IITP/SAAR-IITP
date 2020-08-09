<?php
    session_start();
    if(isset($_GET['offset']) && isset($_GET['limit'])){
        $offset = $_GET['offset'];
        $lim = $_GET['limit'];

        $url = 'http://localhost:8080/SAAR-Server/getPosts.php?offset='.$offset.'&limit='.$lim;

        // $url = 'http://api.saar.iitp.ac.in/getPosts.php?offset='.$offset.'&limit='.$lim;

        $response = file_get_contents($url);
        // echo $response;
        $response = json_decode($response,true);
        $datas = $response['data'];
        foreach($datas as $data){
            if(strlen($data['body']) >= 200){
                $data['body'] .= '....';
            }
        echo '
       
        <div class="jumbotron">
   <div class="media">
   <div class="col-lg-1 col-sm-2">
  <img src="'.$data['user_img'].'" class="mr-3" alt="..." style="width: 64px;height: 64px">
  <div class="username"><strong>'.$data['user_name'].'</strong></div>
 </div>
 <div class="col-lg-9 col-sm-8">
  <div class="media-body">
    <a class="display-4 post_heading" href="./post.php?q='.$data['id'].'">'.$data['title'].'  </a>
    <p>'.$data['body'].'</p>
    
    <a href="./post.php?q='.$data['id'].'" color="blue"> read more ...</a>
    <hr style="margin-top:10px">
    <span>
    <div style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-commenting" aria-hidden="true"></i> '.$data['no_of_comment'].'
    </div>
    <div style="display: inline-block; cursor: pointer;">
    </div>
    <div class="up" id="upvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-up"></i> '.$data['upvotes'].' 
    </div>
    <div class="down" id="downvote_post" style="display: inline-block; cursor: pointer;">
                        <i class="fa fa-thumbs-down"></i> '.$data['downvotes'].'
    </div>
    </span>
    <div class="post_time" style="">'.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
  </div>
</div>
</div>
</div>
        ';
        }
    }
    

// old Interface
     // <div class="jumbotron">
     //    <div class="row">
     //        <div class="col-lg-1 col-sm-2 res"> 
     //        <img src="'.$data['user_img'].'" class="profile_image" style=""></img>
     //        <div class="username"><strong>'.$data['user_name'].'</strong></div>
     //        </div>
     //        <div class="col-lg-9 col-sm-8">
     //        <a class="display-4 post_heading" href="./post.php?q='.$data['id'].'">'.$data['title'].'  </a>
     //            <hr style="margin-top:10px">
     //            <p class="post_body">'.$data['body'].'</p>
     //            <p class="lead">
     //                <a class="btn btn-primary btn-md" href="./post.php?q='.$data['id'].'" role="button">Read more</a>
     //            </p>
     //        </div>
     //        <div class="col-lg-2 col-sm-2">
     //        <div class="post_comment"> '.$data['no_of_comment'].' Comments</div>
     //        <div class="post_time" style=""><i class="fa fa-clock-o"></i> '.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
     //        </div>
     //    </div>
        
     //    </div>
?>