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
                    <h1 class="display-4">'.$data['title'].'</h1>
                    <p class="lead">'.$data['body'].'</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
            </div>
        ';
        }
    }
	
?>