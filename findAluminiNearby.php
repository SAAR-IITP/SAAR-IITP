<?php
    session_start();
    $request=false;
    $result="";
    $count=-1;
     if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==false)
    {
        header("location: noaccess.php");
    } 
        include('connection.php');
        if(isset($_POST['year']) && $_SERVER["REQUEST_METHOD"] == "POST") {
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Alumni Near You</title>
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
            <h1 style="color: #fff; text-decoration: underline; padding-left: 30px;">"Enter city name and Select Passing year"</h1>
        </div>
        <form method="post" action="findAluminiNearby.php">
            <input class="full" type="text" name="city" required placeholder="City" style="padding: 4px; margin: 2px;">
            <select class="full" id="passYear" name="year" style="padding: 4px; margin: 2px;">
                <option value="" selected disabled hidden>Graduation Year</option>
                <option value="All">All</option>
            </select><br>
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
         <td>Link to Fb Profile</td>
       </tr>
       </div>
       <?php  while($count!=0 && $row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
      <tr>
         <td><img src="img/male.jpeg" alt="" /></td>
         <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
         <td><?php echo $row["email"]; ?></td>
         <td><a href=<?php if($row["fb_id"]!="")echo '"'.$row["fb_id"].'"'; ?> >Click Here</a></td>
      </tr>
      <?php } ?>
   </table>
</div>
  
  
      </section>
      <?php } ?>
    </div>
        
    </body>
</html>