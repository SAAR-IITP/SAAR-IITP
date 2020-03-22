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
            <div class="jumbotron">
                    <h1 class="display-4">'.$data['post_id'].'. '.$data['title'].'</h1>
                    <p class="lead">'.$data['post_time'].'</p>
                    <hr class="my-4">
                    <p>'.$data['body'].'</p>';
            foreach($images as $image){
                echo'<img src=http://localhost/SAAR-IITP/uploads/'.$image.' >';
            }
            echo '</div>
            ';
            $replies = $response['replies'];
            foreach($replies as $reply){
                echo '
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                        <h3 class="display-4">'.$reply['time'].' by '.$reply['user_id'].'</h3>
                        <p class="lead">'.$reply['body'].'</p>
                        </div>
                    </div>
                ';
            }
        }
    }else{
        echo "Post not found";
    }
?>
