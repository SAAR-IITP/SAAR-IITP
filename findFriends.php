<?php
    session_start();
    $request=false;
    $result=array();
    $count=-1;
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: noaccess.php");
    } 
      
        
        if(isset($_POST['year']) && $_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
            $url = 'https://saar.iitp.ac.in/api/functions/findFriend.php';
            $ch = curl_init($url);
            if(!isset($_POST["branch"])){
                $branch = 'All';
            }else{
                $branch = $_POST["branch"];
            }
            $data = array(
            'graduation_year' => $_POST["year"],
            'branch' => $branch,
            'name' => $_POST["name"],
            'access_token' => $_SESSION['access_token']
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
              if($response["status"]==200)
              {
                $result = $response["messages"];
                $count = count($response["messages"]);     
              }
              else if($response["status"] == 400)
              {
                $count = 0;        
              }
           }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Your Friends</title>
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
                        <li><form action="index.php" method="post" id="log">
                            <button class="btn" formaction="index.php">Home</button>
                        </form></li>
                        <li><form action="portal.php" method="post" id="log">
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
          <br><br><br>
        <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
            <h1 style="color: #fff; text-decoration: underline; padding-left: 30px;"></h1>
        </div>
        <form method="post" action="findFriends.php"><br>
            <input class="full" id="name" name="name" placeholder="Name" style="padding: 4px; margin: 2px;">
            <input class="full" id="passYear" type="number" name="year" placeholder="Graduation Year" required style="padding: 4px; margin: 2px;">
            <select class="full" id="branch" name="branch" style="padding: 4px; margin: 2px;">
                <option value="" selected disabled >Department</option>
                <option value="All">All</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Chemical and Biochemical Engineering">Chemical and Biochemical Engineering</option>
            </select><br>
            <button class="button" style="vertical-align:middle; background: white; color: #003C4D; padding: 0px; font-size: 20px; margin: 10px;"><span>Submit</span></button>
        </form>
      </section>
      <br><br>
      <?php if($count==0){ ?>
      <section id="extra" style="background: #003C4D; padding: 14px 0 1px 0;">  
            <div class="section-heading" style="text-align: center;margin-bottom: 10px;">
                <h1 style="color: #fff; text-decoration: underline; padding-left: 30px;">NO RECORDS FOUND</h1>
            </div>  
      </section>
        <?php }else{ ?>
        <section id="extra">
          <br><br>
  <div class="table-users">
   <table cellspacing="0">
      <div class="hide">
      <tr>
         <td>Pictures</td>
         <td>Name</td>
         <td>E-mail Id</td>
         <td>Links to Fb Profile</td>
       </tr>
       </div>
      <?php   foreach($result as $row){?>
       <tr>
         <td><img src="<?php echo $row["img_url"]; ?>" alt="Profile Pic" /></td>
         <td><?php  echo $row["first_name"]." ".$row["last_name"]; ?></td>
         <td><?php  echo $row["email"]; ?></td>
        <td><a href='<?php echo $row['fb-link']; ?>' target="_blank">
      <?php if($row['fb_link'] != ''){ ?>Click Here <?php }else{ ?> Not found <?php } ?>
        </a></td>
      </tr>
       <?php  } ?>
     </table>
    </div>
      </section>
      <?php  } ?>
        </div>  
        
    </body>
</html>
