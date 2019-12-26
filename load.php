<?php
	session_start();
    if(isset($_GET['offset']) && isset($_GET['limit'])){
        $offset = $_GET['offset'];
        $lim = $_GET['limit'];
        $url = 'http://localhost/Saar-server/functions/getPosts.php?offset='.$offset.'&limit='.$lim;
        $response = file_get_contents($url);
        // echo $response;
        $response = json_decode($response,true);
        $datas = $response['data'];
        foreach($datas as $data){
        echo '
            <div class="jumbotron">
                    <h3 class="display-4">'.$data['id'].'. '.$data['title'].'</h3>
                    <p class="lead">'.$data['post_time'].'</p>
                    <hr class="my-4">
                    <p>'.$data['body'].'</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-md" href="./post.php?q='.$data['id'].'" role="button">Learn more</a>
                    </p>
            </div>
        ';
        }
    }
	
?>