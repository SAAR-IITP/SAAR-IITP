<?php
session_start();
?>
<html>
    <head>
        <title>Saar! Homepage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
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
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-color fixed-top pad-5">
      <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="asset/img/logo-iitp.png" width="50" height="auto" alt=""> Student Asssociation for Alumni Relations
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto navbar-left">
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
          </ul>
            
        </div>
      </div>
    </nav>
        <div class="container mar-top">
            <div class="row">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 pad-1">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="asset/img/anw1.jpg"  alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="asset/img/anw2.jpg"  alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="asset/img/anw3.jpg"  alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>   
                </div>
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 pad-1 bg-color-1 color-1">
                    <div class="navigation">
                    <h5><center>CONNECT WITH</center></h5>
                    <center><a href="#" class="signup_login border"><button id="btn">LOGIN/SIGNUP</button></a></center>
                    <center><div class="nav_link">NAVIGATION LINKS</div></center>
                    <div class="row pad-3">
                        <div class="col-6 img">
                            <center><img src="asset/img/gallery-icon.png" alt="gallery">
                            <a href="gallery.html">GALLERY</a></center>
                        </div>
                        <div class="col-6 img">
                            <center><img src="asset/img/banner_icon_contact.png">
                            
                            <a href="">CONTACT US</a></center>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="col-6 img">
                            <center><img src="asset/img/makefg.png">
                            <a href="">DONATE</a> </center>
                        </div>
                        <div class="col-6 img">
                            <center><img src="asset/img/help us grow.png">
                            <a href="">NEED HELP</a> </center>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 offset-2 img-1">
                            <img src="asset/img/saar5 copy.png"  alt="saar-logo">
                        </div>
                    </div>
                    </div></div>
                
            </div>
            <div id="myModal">
                <div class="modal-content">
                    <div class="modal-header"><div id="close" class="close-1">&times;</div></div>
                    <div class="div-content">
                        <div class="div-left">
                            <form action="login.php" method="post">
                            <h1>Login Here</h1>
                            <input type="email" name="email" placeholder="you@example.com" class="email" required>
                            <input type="password" name="password" placeholder="**************" class="password" required>
                            <button class="submit" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                        <div class="div-right"><h1>SignUp Here</h1><br><h4>If you don't have an account.<br><button class="submit pad-2"><a href='signup.php?type=normal' id='sign-up'>SignUp</a></button></h4></div>
                    </div>
                </div>
            </div>
            <!-- Popup -->
      <div id='popup'>
            <div class='popup-content'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"/>
                </svg>
            </div>
        </div>
    
        <div id="pop">
            <div class="modal-header pop-header"><div id="close-pop" class="close-1">&times;</div></div>
            <div class="modal-content pop-content" id="pop-c">
                <div class="pop-box">
                
                <div class="div-content pop-content-1">
                    <div class="div-left pop-left">
                        <form action="contactInfo.php" method="post">
                            <h1>Help Us Growing</h1>
                            <p>Provide us contact information of other alumini so that we can reach them.</p>
                            <input type="text" name="name" placeholder="Name" class="email mar-top-2" required>
                             <input type="email" name="email" placeholder="Email" class="email mar-top-2" >
                             <input type="tel" name="contact" placeholder="Mobile number" class="email mar-top-2" required>
                             <button class="submit" type="submit" name="submit">Submit</button>
                        </form>
                    </div>  
                </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12  pad-1 mar-top-3">
            <div id="donate">
                <div class="donate-content">
                    <div class="donate-quote">
                     <center><q>We make a living by what we get, we make a life by what we give.</q></center>
                        <center><span><img src="https://www.biography.com/.image/t_share/MTE5NTU2MzE2MTg0NzQxMzg3/winston-churchill-9248164-1-402.jpg" alt="jay asher"></span></center>
                        <center><span>Winston Churchill</span></center>
                    </div>
                    <div class="donate-btn"><div class="donate-btn-c" ><a href="donateUs.php">Donate Now</a></div></div>
                </div>
            </div>
                </div>
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 pad-1  mar-top-3">
                    <div class="news-headlines">
                    <center><div class="nav_link_news ">NEWS AND HEADLINES<br></div></center>
                    <center>
                        <div class="nh-1">
                            <div class="date">1 Aug 2018</div>
                            <div class="heading">
                                <a><p>DIRECTOR MESSAGE</p></a>
                            </div>
                        </div>
                        <div class="nh-1">
                            <div class="date">1 Aug 2018</div>
                            <div class="heading">
                                <a><p>DIRECTOR MESSAGE</p></a>
                            </div>
                        </div>

                    </center></div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 pad-1 mar-top-3 ">
                    <div id="gallery">
                        <div class="header">
                            <div class="main-header"><p>GALLERY</p></div>
                            <div class="ref"><p><a href="gallery.php">GO TO GALLERY</a></p></div>
                        </div>
                        <hr>
                        <div class="ga-content">
                            <div class="big-img"><a href="gallery.html"><img src="asset/img/anw4.jpg" alt="anwesha-image"></a></div>
                            <div class="small-img">
                              <a href="gallery.php"><img src="asset/img/anw1.jpg" alt="anwesha-image"></a>
                              <a href="gallery.php"><img src="asset/img/anw3.jpg" alt="anwesha-image"></a>
                              <a href="gallery.php"><img src="asset/img/anw5.jpg" alt="anwesha-image"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3  col-lg-12 col-md-12 col-sm-12 pad-1  mar-top-3">
                    <div class="alumni-speaks">
                        <div class="alumni-speaks-header">ALUMNI SPEAKS</div>
                        <hr>
                        <div class="alumni-speaks-content">
                            <div class="alumni-speaks-col">
                                <div class="alumni-speaks-heading">
                                    <center><p>A Talk with IAS officer alumni</p></center>
                                </div>
                                <div class="alumni-speaks-content">
                                    <center>
                                        <p>
                                            Mr. Utsav Gautam (B. Tech/EE/2013) who recently bagged AIR 33 in the UPSC CSE 2017 examination, on our request has agreed to go live through this page so that he can clear the doubts of the aspiring candidates and guide them.
                                        </p>
                                        <button type="button" class="btn btn-1" data-toggle="modal" data-target="#exampleModalCenter">READ MORE</button>
                                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="alumni-speaks-content">
                            <div class="alumni-speaks-col">
                                <div class="alumni-speaks-heading">
                                    <center><p>A Talk with IAS officer alumni</p></center>
                                </div>
                                <div class="alumni-speaks-content">
                                    <center>
                                        <p>
                                            Mr. Utsav Gautam (B. Tech/EE/2013) who recently bagged AIR 33 in the UPSC CSE 2017 examination, on our request has agreed to go live through this page so that he can clear the doubts of the aspiring candidates and guide them.
                                        </p>
                                        <button type="button" class="btn btn-1" data-toggle="modal" data-target="#exampleModalCenter">READ MORE</button>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 pad-1 mar-top-3">
                    <div id="alumni-needs">
                        <div class="header">
                            <div class="main-header"><p>ALUMNI NEEDS</p></div>
                            <div class="ref"><p><a href="#">VIEW ALL</a></p></div>
                        </div>
                        <hr>
                        <div class="alumni-needs-container">
                            <center>
                                <div class="content">
                                    <p>Alumni Needs enables you to harness the power of your alumni network.
                                        Whatever may be the need (academic, relocation, career, projects, mentorship, etc.) you can ask the community and get responses in three simple steps. 
                                        You can offer the same to others who might need your help.
                                    </p>
                                </div>
                                <div class="icon">
                                    <div class="icon-div">
                                        <div class="icon-image"><img src="asset/img/choose_category.png"></div>
                                        <div class="icon-text">Choose a category</div>
                                    </div>
                                    <div class="icon-div">
                                        <div class="icon-image"><img src="asset/img/post need.png"></div>
                                        <div class="icon-text">Post your need</div>
                                    </div>
                                    <div class="icon-div">
                                        <div class="icon-image"><img src="asset/img/message.png"></div>
                                        <div class="icon-text">get response from alumni</div>
                                    </div>
                                </div>
                                <div class="post-need"><button>POST A NEED</button></div>
                            </center>
                        </div>
                    </div>
                </div>
                
                <div class="col-3"></div>
            </div>
        </div>
        <footer class="py-5 bg-dark pad-4">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SAAR, IIT Patna 2017</p>
        <p class="m-0 text-center text-white">Developer - <a href="https://www.facebook.com/saar.iitp/" target="_top"> SAAR Club </a>|
      </div>
      <!-- /.container -->
    </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script>
            window.onload = function(){
                $('.carousel').carousel();
                         
btn = document.getElementById('btn');
 if(btn){       btn.addEventListener('click',function(){
            <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
            {
                echo 'window.location = "portal.php";'; 
            }
            else
            {
                echo 'modal.style.display = "block";';
            }
            ?>
        });};
modal = document.getElementById('myModal');

close = document.getElementById('close');
if(close){
close.addEventListener('click', function(){
    modal.style.display="none";
});};
modal1 = document.getElementById('pop');
btn1 = document.getElementById('popup');
 if(btn1){       btn1.addEventListener('click',function(){
            modal1.style.display = "block";
            var marTop2 = document.querySelector('#pop-c').clientHeight;
            marTop2 = -marTop2/2;
            document.querySelector('#pop-c').style.marginTop = marTop2 + "px";
        });};


close1 = document.getElementById('close-pop');
if(close1){
close1.addEventListener('click', function(){
    modal1.style.display="none";
});};
window.onclick = function(event){
    
    if(event.target == modal){
        modal.style.display="none";
    }
};
            <?php
if(isset($_SESSION['loginfail']) && $_SESSION['loginfail'] == true)
{

    echo 'modal.style.display = "block";
    setTimeout("alertpass()", 1000); ';
    $_SESSION['loginfail']=false;   
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
            {
                echo 'btn.innerHTML="My Profile"'; 
            }
?>};

function alertpass(){
    alert("Incorrect Credentials");
}         
            
        </script>
        
    </body>
</html>

