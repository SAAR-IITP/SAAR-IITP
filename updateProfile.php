<?php
    session_start();
    $email=$_SESSION['email'];
   // $status=$_GET['status'];
    include('connection.php');
     $sql = "SELECT * FROM user WHERE email='$email'";
     $result = mysqli_query($dbc,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    ?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="common/navbar.less" rel="stylesheet" type="text/less">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='//oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.css' />
        <script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=224254148413683" id="facebook-jssdk"></script>
        <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
        <script src='//oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.js'></script>
        <script src="asset/less js/less.min.js" type="text/javascript"></script>
        <script src="asset/AOS/aos.js" type="text/javascript"></script>
        <script>
            
window.onscroll =colorChange;



function fun_dropdown(){
    var dropdown =document.getElementById('dropdown');
    dropdown.style.display="block";
}

 

function colorChange(){
     if( window.pageYOffset >50){
    document.getElementById('nav-bar').className="nav-scroll";
    document.getElementById('dropdown').classList.add("nav-scroll");
    }
    else{
        document.querySelector('#nav-bar').classList.remove("nav-scroll");
        document.getElementById('dropdown').classList.remove("nav-scroll");
        document.getElementById('dropdown').style.backgroundColor="#333";
        document.getElementById('nav-bar').style.backgroundColor="#333";
    }
}
function alertSuc()
{
    console.log("done");
    alert("Profile Updated.");
}
function alertErr()
{
    console.log("done");
    alert("Error, Please try again later.");
}
window.onload = function(){
   $('.dropdown').dropdown();
   colorChange();
   
   // scrolling vertically
    window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)};
// var sqr = document.getElementById('sqr');
// var circle = document.querySelector('.circle');
var innerHeight= window.innerHeight;
var scrollHeight= document.querySelector('#container').clientHeight;
function scroll_hori(){
    
    var pageYOffset = window.pageYOffset;
    var scroll = pageYOffset/(scrollHeight-innerHeight);
    // circle.style.bottom= scroll*100 + "%";
    
   // sqr.style.bottom= scroll*100 + "%";
   //  sqr.style.transform = "rotate(" + -scroll*180 + "deg)";
}
window.addEventListener('scroll',function(){
    requestAnimationFrame(scroll_hori)
},false);

   
    window.onclick =function(event){
    console.log(event.target);
    var dropdown =document.getElementById('dropdown');
    if(!event.target.matches('.dropdown_menu')){
        if(dropdown.style.display == "block"){
            dropdown.style.display ="none"
        }
    }
}
// msg = document.getElementById('msg-confirm');
// if(msg==""){
//     msg.style.display="none";
// }
// else{
//     msg.style.display="block";
//     setTimeout(display_msg,3000);
// }
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
   AOS.init();
   <?php
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
        {
          echo 'window.location = "noaccess.php";';
        }
         if($_GET['status']=="success")
        {
            echo 'setTimeout("alertSuc()", 300);'; 
        }
        if($_GET['status']=="error")
        {
            echo 'setTimeout("alertErr()", 300);';
        }
    ?>
    }
//     function display_msg(){
//     msg.style.display="none";
// } 
    

        </script>
        <link href="asset/AOS/aos.css" rel="stylesheet" type="text/css"/>
        
        
        <style>
            .nav-navigation{
                position: relative;
                float: left;
            }
            #container{
                
                margin-top: 9vh;
                background-size: cover;
                
            }
            .form h1{
                 
                text-align: center;
            }
            @media only screen and (max-width:1153px){
                .nav-logo{
                    display: none;
                }
            }
            @media only screen and (max-width:824px){
                .nav-left{
                    display: none;
                }
                .nav-right{
                    float: none;
                    width: 100%;
                }
                .nav-right a{
                    line-height: 2.2;
                }

            }
            @media only screen and (max-width:767px)
            {
                div #column1{
                    display: none;
                }
                div #column2{
                    width: 100%;
                }
            }
            .dropdown1{
                display: none;
                position: absolute;
                margin-top: 53px;
                left: 0;
                border-radius: 7px;
                width: max-content;
                padding: 7px;
                box-sizing: border-box;
            }
            .dropdown-list{
                padding-top: 5px;
                padding-bottom: 5px;
                
                
            }
            .dropdown-list a{
                display: block;
                float: none;
                width: auto;
                line-height: 1;
            }
            .dropdown_menu{
                cursor: pointer;
            }
            .square{
                display:block;
                position:fixed;
                bottom: 0;
                left: 40%;
                height: 100px;
                width: 100px;
                border: 2px solid #52d3aa;
                border-radius: 5px;
                background-color: transparent;
               color:white;
               
               margin-bottom: -50px;
            }
            
            .circle{
                position: absolute;
                bottom: 0;
                left: 5%;
                height: 134px;
                width: 134px;
                border-radius: 50%;
                background-color: #52d;
                margin-bottom: -134px;
                
            }
            .circle::before{
                content: "";
                height: 100%;
                width: 22.38805%;
                position: absolute;
                background-color: white;
                top: 0;
                left: 0;
            }
            .nav-right a{
                min-width: 133px;
            }
            #msg-confirm{
                position:fixed;
               top: 50%;
               font-size: 20px;
               background-color: yellow;
               text-align: center;
               height: 50px;
               padding: 10px;
               box-sizing: border-box;
               margin-top: -25px;
               left: 25%;
            }         
                    </style>
    </head>
    <body class="ui container">
    <div id="nav-bar"  >
            <div class="nav-left" >
                <div class="nav-logo"><a href="index.php"><img src="asset/img/saar_logo.jpg" alt="saar-logo" class="nav-logo"></a></div>
                <div class="nav-title"><a href="index.php">STUDENT ASSOCIATION FOR ALUMNI RELATIONS</a></div>
            </div>
            <div class="nav-right">
                <a href="#" >HOME</a>
                <a href="portal.php">My Profile </a>
                <div class="nav-navigation">
                    <a  class="dropdown_menu" onclick="fun_dropdown()">OTHER LINKS<i class="dropdown icon"></i></a>
                    <div class="dropdown1" id="dropdown">
                            <div class="dropdown-list"><a href="index.php">SAAR HOMEPAGE</a></div>
                            <div class="dropdown-list"><a href="#">ALUMNI MEET</a></div>
                            <div class="dropdown-list"><a href="#">DONATE NOW</a></div>
                    </div>
                </div>
                
            </div>
        </div>
        
    
        <div class="ui grid three column" id="container">
            <div class="column" id="column1"><p></p></div>
            
<!--            <div class="square" id="sqr" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
            <div class="circle" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
-->
            <div class="column" id="column2">
        
<form action="profileUpdate.php" method="post">
    <div class="ui form">
     <h1>Update Profile</h1>
    <div class="field">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fname" value=<?php echo $row['first_name'];?> required>
    </div>
    <div class="field">
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lname" value=<?php echo $row['last_name'];?> required>
    </div>
    <div class="field">
        <label for="contact">Contact No.:</label>
    <input type="tel" name="contact" required value=<?php echo $row['contact_no'];?> id="contact">
    </div>
    <div class="field">
        <label for="fbId">Facebook profile link (optional but recommended) :</label>
    <input type="text" name="fbId" id="fbId" value=<?php echo $row['fb_id'];?> >
    </div>
    <div class="field">
        <label for="linkden">Linkden Profile link (optional):</label>
    <input type="text" name="linkden" id="linkden" value=<?php echo $row['linkden'];?>>
    </div>
    <div class="field">
        <label for="dob">Date Of Birth:</label>
        <div class="ui icon input">
            <input type="date" id="dob" name="DOB" value=<?php echo $row['DOB'];?>>
            <i class="ui calendar icon"></i>
        </div>
    
    </div>
    <div class="field">
        
        <select id="passYear" name="passingyear" class="ui search selection  dropdown">
             <option value=<?php echo $row['graduation_year'];?> selected><?php echo $row['graduation_year'];?></option>
        </select>
    </div>
    <div class="field">
        
    <select id="degree" name="degree" class="ui search selection  dropdown">
        <option value=<?php echo $row['degree'];?> selected ><?php echo $row['degree'];?></option>
        <option value="B.Tech">B.Tech/B.E</option>
        <option value="M.Tech">M.Tech/M.E</option>
        <option value="M.Sc">M.Sc</option>
        <option value="P.hd">P.hd</option>
    </select>
    </div>
    
    <div class=" field">
    <select id="branch" name="dept" class="ui search selection   dropdown">
        <option value=<?php echo $row['department'];?> selected ><?php echo $row['department']?></option>
        <option value="CSE">Computer Science and Engineering</option>
        <option value="EE">Electrical Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="CBE">Chemical and Biochemical Engineering</option>
    </select>
    </div>
    <div class="field">
    <select id="etype" name="etype" class="ui dropdown">
        <option value=<?php echo $row['employment_type'];?> selected ><?php echo $row['employment_type'];?></option>
        <option value="job">Salaried</option>
        <option value="Entrepreneur">Entrepreneur</option>
        <option value="higher stuies">Higher Studies</option>
        <option value="Civil Services">Civil Services</option>
    </select>
    </div>
    <div class="field">
        <label for="presentEmp">Present Employer/Educational Institution:</label>
    <input type="text" id="presentEmp" name="presentEmployer" value=<?php echo $row['present_employer'];?> required>
    </div>
    <div class="field">
        <label for="designation">Designation:</label>
    <input type="text" id="Designation" name="designation" value=<?php echo $row['designation'];?>required>
    </div>
    <div class="field">
        <label for="address">Address:</label>
    <textarea id="address" name="address" required><?php echo $row['address']; ?></textarea>
    </div>
     <div class="field">
        <label for="country">Country:</label>
    <input type="text" id="country" name="country" value=<?php echo $row['country']; ?> required>
    </div>
    
    <div class="field">
        <label for="state">State:</label>
    <input type="text" id="state" name="state" value=<?php echo $row['state']; ?> required>
    </div>
    <div class="field">
        <label for="city">City:</label>
    <input type="text" id="city" name="city" value=<?php echo $row['city']; ?> required>
    </div>
    <div class="field">
        <label for="achievements">Achievements after graduation:</label>
    <textarea id="achievements" name="achievements" required><?php echo $row['achievement']; ?></textarea>
    </div>
     <button class="ui animated large button">
         <div class="visible content">Submit</div>
         <div class="hidden content">
             <i class="right arrow icon"></i>
         </div></button>
     </div>
</div>
</form></div><div class="column" id="column1"><p></p></div>
</div>
        
</body>
</html>