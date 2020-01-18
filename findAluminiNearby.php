<?php
    session_start();
    $request=false;
    $result=array();
    $count=-1;
     if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: ./index.php");
    } 
        if(isset($_POST['year']) && $_SERVER["REQUEST_METHOD"] == "POST") {
            $url = 'http://localhost/saar-server/functions/aluminiNearMe.php';
            $ch = curl_init($url);
            $data = array(
            'graduation_year' => $_POST["year"],
            'city' => $_POST["city"],
            'country' => $_POST["country"]
            );
            $payload = http_build_query($data);

            curl_setopt($ch, CURLOPT_POST, true);
            //attach encoded JSON string to the POST fields
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

            //return response instead of outputting
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            //execute the POST request
            $res = curl_exec($ch);
            //close cURL resource
            curl_close($ch);
            $response = json_decode($res,true);
              if($response["status"] == 200){
                $count = count($response["messages"]);
                $request = true;
                $result = $response["messages"];
              }else if($response["status"] == 400){
                $count = 0;
                $request = false;
              }
           }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Alumni Near You</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/findal.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
    </head>

    <body style="background: #fff;">

        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header--> 
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="index.php">Home</button>
                        </form></li>
                        <li><form action="#" method="post" id="log">
                            <button class="btn" formaction="portal.php">Profile</button>
                        </form></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <img src="img/logo1.png" class="static">
            </div>
            <nav>
                <ul>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="index.php"><span>Home</span></button>
                        </form>
                    </li>
                    <li>
                        <form action="#" method="post" id="log">
                            <button class="button" style="vertical-align:middle" formaction="portal.php"><span>Profile</span></button>
                        </form>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/saar.iitp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        
  <div class="page-content">
      
      <section id="extra" style="background: #003C4D; padding: 20px;">  
          <br><br><br><br>
        <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
            <h1 style="color: #fff; text-decoration: underline; padding-left: 30px;"></h1>
        </div>
        <form method="post" action="findAluminiNearby.php">
            <input class="full" type="text" name="city" required placeholder="City" style="padding: 4px; margin: 2px;">
            <input class="full" type="text" name="country" required placeholder="Country" style="padding: 4px; margin: 2px;">
            <input class="full" type="number" name="year" required placeholder="Graduation Year" style="padding: 4px; margin: 2px;">
            <br>
            <button class="button" style="vertical-align:middle; background: white; color: #003C4D; padding: 0px; font-size: 20px; margin: 10px;" ><span>Submit</span></button>
        </form>
      </section>
      
      <br><br>
      <?php if($count==0){ ?>
      <section id="extra" style="background: #003C4D; padding: 14px 0 1px 0;">  
            <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
                <h1 style="color: #fff; text-decoration: underline; padding-left: 30px;">"NO RECORDS FOUND"</h1>
            </div>  
      </section>
      <?php }else{ ?>
      <section id="extra">
          <br><br>
  <div class="table-users">
   <table cellspacing="0">
      <div class="hide">
       <tr>
         <td>DP</td>
         <td>Name</td>
         <td>E-mail Id</td>
         <td>Address</td>
       </tr>
       </div>
       <?php foreach($result as $row){?>
      <tr>
         <td><img src="<?php echo $row["img_url"]; ?>" alt="" /></td>
         <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
         <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row['address']; ?></td>
      </tr>
      <?php } ?>
   </table>
</div>
  
  
      </section>
      <?php } ?>
    </div>
        
    </body>
</html>
