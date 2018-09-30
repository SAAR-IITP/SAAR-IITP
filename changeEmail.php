 <?php
session_start();
      ?>
<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Email Change</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript">
      function alertPass(){
        alert("Existing Incorrect Password.");
      }
      function alertSuccess(){
        alert("Email Changed Successfully.")
      }
      window.onload = function(){
        <?php
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
        {
            echo 'window.location = "noaccess.php";';
        }
        if($_GET['status']=="success")
        {
          echo 'setTimeout("alertSuccess()", 300); ';
        }
        else if($_GET['status']=="wrongpass")
        {
          echo 'setTimeout("alertPass()", 300);';
        }
        ?>
      }
    </script>
    <style>
    body{
    background-color: #fff;
}
.bg-color{
    background-color:#363636;
}
.navbar-dark .navbar-nav .nav-link{
    color:#fff;
}

.pad-1{
    padding: 10px;
    padding-top: 0px;
    padding-bottom: 0px;
}
.mar-top{
    margin-top: 65px;
}

.navigation{
    width: 100%;
    background-color: #CF6F3F;
    padding-top: 10px;
}
.pad-5{
    padding: 0px !important;
}
    </style>
     </head>
    <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-color fixed-top pad-5">
      <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="asset/img/logo-iitp.png" width="50" height="auto" alt=""> Student Asssociation for Alumni Relations
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto navbar-right">
              <li class="nav-item">
                  <a class="nav-link active active1" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="portal.php">Portal</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
            
        </div>
      </div>
    </nav>
        <div class="container" style="margin-top:125px;">
                <div class="row">
                    <div class=" col-lg-6 offset-lg-3">
                        <form method="POST" action="emailchange.php">
                        <div class="jumbotron">
                            <center><h3><b>Change Email</b></h3></center>
                        
                        <div class="form-group">
                            <input type="hidden" placeholder="Current Email" class="form-control"  value="<?php$_SESSION['email']?>"   >
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Your Password" class="form-control" name="password" size="50" required=""> 
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Enter New Email" class="form-control" name="newEemail" required=""> 
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="setting_submit">Change</button>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   </body>
</html> 