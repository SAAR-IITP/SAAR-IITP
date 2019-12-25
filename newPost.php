<?php 
    session_start();
    if(isset($_POST['submit'])){
        $url = 'http://localhost/Saar-Server/functions/createPost.php';
        $ch = curl_init($url);
        $data = array(
            'user_id' => $_POST['user_id'],
            'cat_id' => $_POST['cat_id'],
            'title' => $_POST['title'],
            'body' => $_POST['body']
        );
        $payload = http_build_query($data);
        curl_setopt($ch, CURLOPT_POST, true);
        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //execute the POST request
        $result = curl_exec($ch);
        //close cURL resource
        curl_close($ch);
	
        $response = json_decode($result,true);
        // echo $response['messages'][0];
        if($response['status'] == 209 || $response['status'] == 408){
            $_SESSION['msg'] = $response['messages'][0];
            header("location:chat.php");
        }
    }
?>