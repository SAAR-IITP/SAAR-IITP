<?php
		$request=false;
		$result="";
		$count=0;
	    session_start();
        include('connection.php');
        if($_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
              
              $year = $_POST['year']; 
              $branch = $_POST['branch'];
              if($branch=="All")
              {
              	$sql = "SELECT email,first_name,last_name,fb_id FROM user WHERE graduation_year = '$year'";
                $result = mysqli_query($dbc,$sql);
        		    $count = mysqli_num_rows($result);     
              }
              else
              {
                $sql = "SELECT email,first_name,last_name,fb_id FROM user WHERE graduation_year = '$year' and department = '$branch'";
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
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-color fixed-top pad-5" style="opacity:0.88">
        <div class="container">
            <div class="col-1">
                  <a class="navbar-brand" href="index.php">
                      <img src="asset/img/logo-iitp.png" width="50" height="auto" alt=""> 
                  </a>
            </div>
            <div class="col-5" style="font-size: 19px; color:white">
                 Student Asssociation for Alumni Relations
            </div>
                          
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          <div class="col-6 collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto mr-auto pad-1">
                          <li class="nav-item active"><a class="nav-link" href="./index.html"><span class="fa fa-home fa-lg"></span> Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                          <li class="nav-item"><a class="nav-link" href="./donateUs.php"><span class="fas fa-hand-holding-usd fa-lg"></span> Give Back</a></li>
                          <li class="nav-item"><a class="nav-link" href="#gallery"><span class="fas fa-images fa-lg"></span> Gallery</a></li>
                         
                      </ul>
                      <span class="navbar-text btn" >
                              <a data-toggle="modal" data-target="#loginModal">
                              <span class="fa fa-sign-in-alt fa-lg"></span> Login</a>
                      </span>
            <!--<ul class="navbar-nav ml-auto navbar-left">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="donateUs.php">Give Back</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>            
            </ul>-->     
          </div>
        </div>
      </nav>
      
      <div class="container">

      <div class="row" style="margin-top: 150px;">
        
        <form style="margin:auto" method="post" action="">  
          <input type="text" name="city" placeholder="City" required>
          <input type="text " name="year" placeholder="Year" required>
          <br>
          <br>
          <div style="text-align: center">
          <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
          </div>
        </form>
        
      </div>

    </div>

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