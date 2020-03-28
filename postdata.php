<?php 
    session_start();
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
        $url = 'http://localhost/Saar-server/functions/getPostInfo.php?post_id='.$post_id;
        $response = file_get_contents($url);
        // echo $response;
        $response = json_decode($response,true);
        if($response['status']==409){
            echo $response['message'];
        }else if($response['status']==210){
            $data = $response['data'];
            $images = unserialize($data['images']);
            echo '
            <div class="jumbotron" style="padding: 2% 2% 1% 3%;">
                    <h1 class="display-4">'.$data['post_id'].'. '.$data['title'].'  <img src="img/abhi.jpg" align="right" style="width: 18%;max-width:159.02px;height: auto;border-radius: 50%;object-fit: cover;object-position: center;"></img></h1>
                    <p class="lead">'.$data['post_time'].'</p>
                    <i class="fa fa-thumbs-up" style="color:green"></i><br><i class="fa fa-thumbs-down" style="color:red"></i><br>
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
