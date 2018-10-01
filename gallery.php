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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    </head>
    <body style="font-family: 'Open Sans', sans-serif">
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
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donateUS.php">Give Back</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active active1" href="gallery.php">Gallery</a>
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
  <div class="w3-row flex-layout">
    <div class="w3-third">
        <img src="asset/img/anw1.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/anw2.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/anw3.jpg" style="width:100%" onclick="onClick(this)" >
    </div>

    <div class="w3-third">
        <img src="asset/img/anw5.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/CS.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/cee.jpg" style="width:100%" onclick="onClick(this)" >
    </div>
    
    <div class="w3-third">
        <img src="asset/img/chem.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/mech.jpg" style="width:100%" onclick="onClick(this)" >
        <img src="asset/img/ece.jpg" style="width:100%" onclick="onClick(this)" >
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
.w3-modal{
    z-index: 2000 !important;
}
img{
    padding: 10px;
}
.w3-main{
    background-color: #fff;
}
.active1{
    background-color: rgba(0,0,0,0.9);
}
.flex-layout{
  display:flex;
  flex-wrap:wrap;

}
.w3-third{
  width:auto !important;
  float:none;
  flex:1 0 300px;
  display:flex;
  flex-direction:column;
}
.w3-third img{
  flex: 1 0 auto;
}

        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
