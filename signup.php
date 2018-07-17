<?php
session_start();
?>
<html>
    <head>
        
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="style.less" rel="stylesheet" type="text/less">
        <link href="common/navbar.less" rel="stylesheet" type="text/less">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='//oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.css' />
        <link href="asset/AOS/aos.css" rel="stylesheet" type="text/css"/>
        <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
        <script src='//oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.js'></script>
        <script src="asset/less js/less.min.js" type="text/javascript"></script>
        <script src="asset/AOS/aos.js" type="text/javascript"></script>
        <script>
            function link_change(){
                
            };
            
window.onscroll =colorChange;



function fun_dropdown(){
    var dropdown =document.getElementById('dropdown');
    dropdown.style.display="block";
}
function alertemail(){
    alert("Email Address already registered.");
}
function alertboth(){
    alert("Roll no. and Email already registered.");
}
function alertroll(){
    alert("Roll no. already registered.")
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
$(window).bind("load", function() {
     <?php
    if(isset($_SESSION['rolldup']) && $_SESSION['rolldup'] == true && isset($_SESSION['emaildup']) && $_SESSION['emaildup'] == true)
    {

        echo 'setTimeout("alertboth()", 100); ';
        $_SESSION['rolldup']=false;
        $_SESSION['emaildup']=false;   
    }
    else if(isset($_SESSION['emaildup']) && $_SESSION['emaildup'] == true)
    {

        echo 'setTimeout("alertemail()", 100); ';
        $_SESSION['emaildup']=false;   
    }
    else if(isset($_SESSION['rolldup']) && $_SESSION['rolldup'] == true)
    {

        echo 'setTimeout("alertroll()", 100); ';
        $_SESSION['rolldup']=false;   
    }
    ?>
});
window.onload = function(){
   $('.dropdown').dropdown();
   colorChange();
   
   // scrolling vertically
    window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)};
var sqr = document.getElementById('sqr');
var circle = document.querySelector('.circle');
var innerHeight= window.innerHeight;
var scrollHeight= document.querySelector('#container').clientHeight;
function scroll_hori(){
    
    var pageYOffset = window.pageYOffset;
    var scroll = pageYOffset/(scrollHeight-innerHeight);
   // circle.style.bottom= scroll*100 + "%";
    
  // sqr.style.bottom= scroll*100 + "%";
    //sqr.style.transform = "rotate(" + -scroll*180 + "deg)";
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
link_change();
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
}

        </script>
        <style>
            .nav-navigation{
                position: relative;
            }
            #container{
                
                margin-top: 9vh;
                background: url('Untitled-5.svg') no-repeat;
                background-size: cover;
                
            }
            .form h1{
                 
                text-align: center;
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
                margin-top: 20.8px;
                left: 0;
                border-radius: 7px;
                width: max-content;
                padding: 7px 12px;
                box-sizing: border-box;
            }
            .dropdown-list{
                padding-top: 5px;
                padding-bottom: 5px;
                
                
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
        </style>
    </head>
    <body class="ui container">
    <div id="nav-bar"  >
            <div class="nav-left" >
                <div class="nav-logo"><a href="index.php"><img src="asset/img/saar_logo.jpg" alt="saar-logo" class="nav-logo"></a></div>
                <div class="nav-title"><a href="index.php">STUDENT ASSOCIATION FOR ALUMNI RELATIONS</a></div>
            </div>
            <div class="nav-right">
                <div class="nav-navigation"><a href="#" >HOME</a></div>
                <div class="nav-navigation"><a href="index.php">LOG IN </a></div>
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
            <div class="column" id="column1"><p></p></div>
<!--            <div class="square" id="sqr" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
            <div class="circle" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
-->
            <div class="column" id="column2">
        
<form action="register.php" method="post">
    <div class="ui form">
     <h1>SIGNUP FORM</h1>
    <div class=" field">
        <label for="college_id">College Roll Number:</label>
        <input type="text" id="college_id" name="college_id" required >
    </div>
    <div class="field">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fname" required>
    </div>
    <div class="field">
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lname" required>
    </div>
    <div class="field">
        <label for="email">Email:</label>
    <input type="email" name="email" required id="email">
    </div>
    <div class="field">
        <label for="pass">passwords:</label>
    <input type="password" id="pass" required minlength="5" maxlength="20" name="password">
    </div>
    <div class="field">
        <label for="dob">Date Of Birth:</label>
        <div class="ui icon input">
            <input type="date" id="dob" name="DOB">
            <i class="ui calendar icon"></i>
        </div>
    
    </div>
    <div class="field">
        
        <select id="passYear" name="passingyear" class="ui search selection  dropdown">
            <option value="">Graduation Year</option>
        </select>
    </div>
    <div class="field">
        
    <select id="degree" name="degree" class="ui search selection  dropdown">
        <option value="">Degree</option>
        <option value="B.Tech">B.Tech/B.E</option>
        <option value="M.Tech">M.Tech/M.E</option>
        <option value="M.Sc">M.Sc</option>
        <option value="P.hd">P.hd</option>
    </select>
    </div>
    
    <div class=" field">
        
    <select id="branch" name="dept" class="ui search selection   dropdown">
        <option value="">Department</option>
        <option value="CSE">Computer Science and Engineering</option>
        <option value="EE">Electrical Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Chemical Engineering</option>
        <option value="CBE">Chemical and Biochemical Engineering</option>
    </select>
    </div>
    <div class="field">
    <select id="etype" name="etype" class="ui dropdown">
        <option value="">Employment Type</option>
        <option value="job">Salaried</option>
        <option value="Entrepreneur">Entrepreneur</option>
        <option value="higher stuies">Higher Studies</option>
        <option value="Civil Services">Civil Services</option>
    </select>
    </div>
    <div class="field">
        <label for="presentEmp">Present Employer/Educational Institution:</label>
    <input type="text" id="presentEmp" name="presentEmployer" required>
    </div>
    <div class="field">
        <label for="designation">Designation:</label>
    <input type="text" id="Designation" name="designation" required>
    </div>
    <div class="field">
        <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea>
    </div>
     <div class="field">
        <label for="country">Country:</label>
    <input type="text" id="country" name="country" required>
    </div>
    
    <div class="field">
        <label for="state">State:</label>
    <input type="text" id="state" name="state" required>
    </div>
    <div class="field">
        <label for="city">City:</label>
    <input type="text" id="city" name="city" required>
    </div>
    <div class="field">
        <label for="achievements">Achievements after graduation:</label>
    <textarea id="achievements" name="achievements" required></textarea>
    </div>
        <button tpye="submit" value="submit">Submit</button>
</div>
</form></div>
</div>
</body>
</html>