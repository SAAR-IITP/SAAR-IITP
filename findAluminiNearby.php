<?php
		$request=false;
		$result="";
		$count=0;
	    session_start();
        include('connection.php');
        if($_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
              
              $year = $_POST['year']; 
              $city = $_POST['city'];
              if($year=="All")
              {
              	$sql = "SELECT email,first_name,last_name,fb_id FROM user WHERE city = '$city'";
                $result = mysqli_query($dbc,$sql);
        	     	$count = mysqli_num_rows($result);     
              }
              else
              {
                $sql = "SELECT email,first_name,last_name,fb_id FROM user WHERE graduation_year = '$year' and city = '$city'";
                $result = mysqli_query($dbc,$sql);
        		    $count = mysqli_num_rows($result);        
              }
           }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Send Birthday Wishes</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">        
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="stylesheet/974.less" rel="stylesheet" type="text/less" media="only screen and (max-width:974px)"/>
        <link href="stylesheet/912.css" rel="stylesheet" type="text/css" media="only screen and (max-width:912px)"/>
        <link href="stylesheet/900.less" rel="stylesheet" type="text/less" media="only screen and (max-width:900px)"/>
        <link href="stylesheet/768.less" rel="stylesheet" type="text/less" media="only screen and (max-width:768px)"/>
        <link href="stylesheet/600.less" rel="stylesheet" type="text/less" media="only screen and (max-width:600px)"/>
        <link href="stylesheet/577.less" rel="stylesheet" type="text/less" media="only screen and (max-width:577px)"/>
        <link href="stylesheet/458.less" rel="stylesheet" type="text/less" media="only screen and (max-width:458px)"/>
        <script src="asset/less js/less.min.js" type="text/javascript"></script>
  
  <script>
  window.onload=function(){
     var min = 2012;
            var d = new Date();
            max = d.getFullYear();
            for (var i = min; i<=max; i++){
               var opt = document.createElement('option');
               opt.value = i;
               opt.innerHTML = i;
                console.log(document.getElementById('passYear'));
               document.getElementById('passYear').appendChild(opt);
                };
  }
</script>
</head>
<body>
    <form method="post" action="">  
    <input type="text" name="city" required>
    <select id="passYear" name="year" >
            <option value="" selected disabled hidden>Graduation Year</option>
        </select>
    <input type="submit">
    </form>
    <?php 
    if($count!=0)
    {
    	echo '<table style="width:100%" border="1"> <tr><th>name</th><th>email</th> <th>FB</th></tr>';
    }
    while($count!=0 && $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
    	echo '<tr><td>'.$row['first_name']." ".$row['last_name'].'</td><td>'.$row['email'].'</th> <th>'.$row['fb_id'].'</th></tr>';
    }
    if($count!=0)
    {
    	echo '</table>';
    }
    ?>
</body>
</html>