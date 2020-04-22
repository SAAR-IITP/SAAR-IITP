<?php
	session_start();
    if(isset($_GET['offset']) && isset($_GET['limit'])){
        $offset = $_GET['offset'];
        $lim = $_GET['limit'];
        $url = 'http://localhost/SAAR-Server/getPosts.php?offset='.$offset.'&limit='.$lim;
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
        <div class="row">
            <div class="col-lg-1 col-sm-2 res"> 
            <img src="'.$data['user_img'].'" class="profile_image" style=""></img>
            <div class="username"><strong>'.$data['user_name'].'</strong></div>
            </div>
            <div class="col-lg-9 col-sm-8">
            <a class="display-4 post_heading" href="./post.php?q='.$data['id'].'">'.$data['title'].'  </a>
                <hr style="margin-top:10px">
                <p class="post_body">'.$data['body'].'</p>
                <p class="lead">
                    <a class="btn btn-primary btn-md" href="./post.php?q='.$data['id'].'" role="button">Read more</a>
                </p>
            </div>
            <div class="col-lg-2 col-sm-2">
            <div class="post_comment"> '.$data['no_of_comment'].' Comments</div>
            <div class="post_time" style=""><i class="fa fa-clock-o"></i> '.$data['post_time'][0].' at '.$data['post_time'][1].'</div>
            </div>
        </div>
        
        </div>
        ';
        }
    }
	
?>