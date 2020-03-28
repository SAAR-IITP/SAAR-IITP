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
            if(strlen($data['body']) >= 200){
                $data['body'] .= '....';
            }
        echo '
            <div class="jumbotron" style="padding: 2% 2% 1% 3%;">
                    <div style="width:100%;height:25%;">
                        <p class="display-4" style="margin-bottom:0px;font-size:290%;font-weight:normal;">'.$data['id'].'. '.$data['title'].'  <img src="img/abhi.jpg" align="right" style="width: 18%;height: auto;border-radius: 50%;object-fit: cover;object-position: center;"></img></p>
                        <p class="lead">'.$data['post_time'][0].' at '.$data['post_time'][1].' <i class="fa fa-comments"></i><br><i class="fa fa-eye"></i></p>
                        
                    </div>
                    <hr class="my-4" style="padding-top:2%">
                    <p>'.$data['body'].'</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-md" href="./post.php?q='.$data['id'].'" role="button">Learn more</a>
                    </p>
            </div>
        ';
        }
    }
	
?>