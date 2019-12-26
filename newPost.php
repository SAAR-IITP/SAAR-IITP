<?php 
    session_start();
    $error = array();
    $photo = array();
    if(isset($_POST['submit'])){
        // saving the photos
        $j = 0;     // Variable for indexing uploaded image.
        
        for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        // Loop to get individual element from the array
        $validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
        $ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
        $target_path = "uploads/";     // Declaring Path for uploaded images.
        $file_extension = end($ext); // Store extensions in the variable.
        $unique = md5(uniqid()) . "." . $ext[count($ext) - 1];
        $target_path = $target_path . $unique;     // Set the target path with a new name of image.
        $j = $j + 1;      // Increment the number of uploaded images according to the files in array.
        if (($_FILES["file"]["size"][$i] < 1000000)     // Approx. 100kb files can be uploaded.
        && in_array($file_extension, $validextensions)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
        // If file moved to uploads folder.
            $photo[] =  $unique;
        } else {     //  If File Was Not Moved.
            $error[] =  $j. ').<span id="error">please try again!.</span><br/><br/>';
        }
        } else {     //   If File Size And File Type Was Incorrect.
            $error[] =  $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
        }
        if(!empty($error)){
            $_SESSION['msg'] = $error[0];
            header("location:chat.php");
        }else{
        // making api call
        $images = serialize($photo);
        $url = 'http://localhost/Saar-Server/functions/createPost.php';
        $ch = curl_init($url);
        $data = array(
            'user_id' => $_POST['user_id'],
            'cat_id' => $_POST['cat_id'],
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'images' => $images
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
    }
?>