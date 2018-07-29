<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gallery | SAAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-color fixed-top pad-5">
      <div class="container">
        <a class="navbar-brand" href="index.html">
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
        <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="w3-main" style="margin-top:65px;">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-third">
        <img src="asset/img/anw1.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
        <img src="asset/img/anw2.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
        <img src="asset/img/anw3.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-third">
        <img src="asset/img/anw4.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
        <img src="asset/img/anw5.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
        <img src="asset/img/btech14-18.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-third">
        <img src="asset/img/btech14-18ce.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
        <img src="asset/img/btech14-18ch.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
        <img src="asset/img/btech14-18ee.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top: 0px; display: none;" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image" src="https://www.w3schools.com/w3images/girl.jpg">
      <p id="caption">Canoeing again</p>
    </div>
  </div>

  
  

<!-- End page content -->
</div>
</div>
</div>
        </div>
        <style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}

            .pad-5{
    padding: 0px !important;
}
body{
    background-color: #ccc;
}
.bg-color{
    background-color:#363636;
}
.ml-auto, .mx-auto{
    margin-left: 0px !important;
    margin-right: auto !important;
}
.w3-modal{
    z-index: 2000 !important;
}
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
    </body>
</html>
