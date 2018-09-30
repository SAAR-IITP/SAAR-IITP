<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>SAAR | Donate Page</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='http://oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.css' />
        <link href="stylesheet/donateUs/donate.less" type="text/less" rel="stylesheet">
        <link href="stylesheet/donateUs/1030.css" rel="stylesheet" type="text/css" media="only screen and (max-width:1030px)"/>
        <link href="stylesheet/donateUs/947.css" rel="stylesheet" type="text/css" media="only screen and (max-width:947px)"/>
        <link href="stylesheet/donateUs/830.css" rel="stylesheet" type="text/css" media="only screen and (max-width:830px)"/>
        <link href="stylesheet/donateUs/776.css" rel="stylesheet" type="text/css" media="only screen and (max-width:776px)"/>
        <link href="stylesheet/donateUs/711.css" rel="stylesheet" type="text/css" media="only screen and (max-width:710px)"/>
        <link href="stylesheet/donateUs/600.css" rel="stylesheet" type="text/css" media="only screen and (max-width:600px)"/>
        <link href="stylesheet/donateUs/580.css" rel="stylesheet" type="text/css" media="only screen and (max-width:580px)"/>
        <link href="stylesheet/donateUs/490.css" rel="stylesheet" type="text/css" media="only screen and (max-width:490px)"/>
        <link href="stylesheet/donateUs/450.css" rel="stylesheet" type="text/css" media="only screen and (max-width:450px)"/>
        <script src="asset/less js/less.min.js" type="text/javascript"></script>
    </head>
    <body>
  
        <section>
            <div id="parallax" >
                <div class="parallax-background">
                    <div class="caption">
                        <span class="caption-text" >Welcome To SAAR</span>
                    </div>
                </div>
            </div>

        </section>
        <div id="nav-bar" class="box-shadow" onclick="stickyNavbar()">
            <div class="nav ">
                <a href="index.php">HOME</a>
                <a href="#way">WAYS TO DONATE</a>
                <a href="#donate_for" onclick="coming_soon()">DONATE FOR</a>
                <a href="#nav_link">NAVIGATION LINKS</a>
            </div>
        </div>
        <section id="way">
            <div class="way_container">
                <div class="way_title">
                    <h1>Make Payment Through</h1>
                </div>
                <div class="table">
                    <div class="cell">
                        <h3>Demand Draft</h3>
                        <p>Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere.
                            Suscipit odit quas nemo, enim laudantium. </p>
                    </div>
                    <div class="cell">
                      <h3>Cheque</h3>
                      <p>Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere.
                            Suscipit odit quas nemo, enim laudantium. </p>
                    </div>
                    <div class="cell">
                        <h3>Credit card/Debit card</h3>
                        <p>Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere.
                            Suscipit odit quas nemo, enim laudantium. </p>
                   <!--     <button type="submit" id="PTP" class="w2d"><a href="#donate_for">Continue</a></button>-->
                    </div>
                    <div class="cell">
                        <h3>Net Banking</h3>
                        <p>Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere.
                            Suscipit odit quas nemo, enim laudantium. </p>
                    <!--    <button type="submit" id="PTP" class="w2d"><a href="#donate_for">Continue</a></button>-->
                    </div>
                </div>
            </div>
            
        </section>
        <!--
        <section id="donate_for">
                    <div class="donate_for_container">
                        <div class="donate_for_title">
                            <h1>Donate To Our Leaders</h1>
                        </div>
                        <div class="donate_content">
                            <div class="list" ><div id="anwesha"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="HOSCA"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="E-club"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Celesta"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="ACE"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Sparkonics"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="NJACK"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Threshold"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Robocon"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Supra-Baha"><span><a href="#donate_form">Donate Now</a></span></div></div>
                            <div class="btn"><span id="button" onclick="show_list()">more</span></div>
                        </div>
                        
                    </div>
        </section>
        -->
        <section id="donate_form">
            
            <form action="" method="post">
                <div class="ui form">
                    <h1>DONATE FORM</h1>
                    <div class="field">
                    <label for="full_name">Name</label>
                    <input type="text" name="full_name" id="full_name" required="">
                    </div>
                    <div class="field">
                    <label for="roll_no">Roll No</label>
                    <input type="text" id="roll_no"  name="roll_no" maxlength="8">
                    </div>
                    <div class="field">
                    <label for="batch">Batch</label>
                    <input tye="text" id="batch" name="batch" >
                    </div>
<!--                    <div class=" field">
                        <label id="branch">Department</label>
                    <div class="sel">       
                     <select id="branch" name="dept" class="">
                        <option value=""></option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="EE">Electrical Engineering</option>
                        <option value="ME">Mechanical Engineering</option>
                        <option value="CE">Civil Engineering</option>
                        <option value="CBE">Chemical and Biochemical Engineering</option>
                     </select>
                    </div>
                    </div>  -->
                   <div class="field">
                        <label for="donate_to">Department </label>
                        <div class="ui selection search dropdown fluid "  id="donate_to" >
                        <input type="hidden" name="club">
                        <i class="dropdown icon"></i>
                        <div class="default text">branch</div>
                        <div class="menu">
                          <div class="item" data-value="cse">Computer Science and Engineering</div>
                          <div class="item" data-value="ee">Electrical Engineering</div>
                          <div class="item" data-value="me">Mechanical Engineering</div>
                          <div class="item" data-value="ce">Civil Engineering</div>
                          <div class="item" data-value="ch">Chemical and Biochemical Engineering</div>
                        </div>
                      </div>
                    </div> 
                   
                    <div class="field">
                        <label for="donate_to">Donate </label>
                    <div class="ui selection search dropdown fluid multiple"  id="donate_to" >
                        <input type="hidden" name="club">
                        <i class="dropdown icon"></i>
                        <div class="default text">Club</div>
                        <div class="menu">
                            <div class="header">Fest</div>
                            <div class="ui divider"></div>
                          <div class="item" data-value="anwesha">Anwesha</div>
                          <div class="item" data-value="celesta">Celesta</div>
                          <div class="ui divider"></div>
                          <div class="header">Clubs</div>
                          <div class="item" data-value="hosca">HOSCA</div>
                          <div class="item" data-value="eclub">E-club</div>
                          <div class="item" data-value="ace">ACE</div>
                          <div class="item" data-value="sparkonics">Sparkonics</div>
                          <div class="item" data-value="njack">NJACK</div>
                          <div class="item" data-value="threshold">Threshold</div>
                          <div class="item" data-value="robocon">Robocon</div>
                          <div class="item" data-value="supra-baha">Supra-baha</div>
                        </div>
                    </div>
                    </div>
                    
                            <div class="field">
                                <label id="donate_amount">Amount</label>
                                
                                    <input type="text" min="0" name="donate_amount" required="" id="donate_amount">
                                
                            </div>
                    <div class="field">
                        <label for="comment">Comments</label>
                        <textarea id="comment" name="comment" ></textarea>
                    </div>
                    <button type="submit" id="PTP">Proceed</button>
                </div>
            </form>
        </section>
        <div class="coming_soon" id="coming_soon" style="display:none;">
            <div class="img_container">
                <img src="asset/img/coming soon.png">
            </div>
        </div>
        <iframe src="comingsoon.php"   id="iframe-modal">
            
        </iframe>
        <style>
            iframe{
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .coming_soon{
                top: 0;
                left: 0;
                z-index: 10000;
                position: fixed;
                background-color: rgba(0,0,0,0.9);
                width: 100%;
                height: 100%;
                padding-top: 100px;
            }
            
            .img_container img{
                
                max-width: 100%;
                
            }
            .img_container{
                background-color: #fff;
                margin: 0px auto;
            }
            @media screen and (min-width:200px){
                .img_container{
                    width: 100%;
                }
            }
            @media  screen and (min-width:600px){
                .img_container{
                    width: 80%;
                }
            }
            @media screen and (min-width:900px){
                .img_container{
                    width: 40%;
                }
            }
            @media  screen and (min-width:1500px){
                .img_container{
                    width: 600px;
                }
                .coming_soon{
                    width: 1500px;
                    height: 100%;
                }
            }
        </style>
        <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
        <script src='http://oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.js'></script>
        
        
         <script>
    var a;
    if(window.innerWidth<=580){
        a=1;
    }else{
        if(window.innerWidth<=830){
            a=2;
    }else{
        a=3;
    }
    }
    cs_modal= document.getElementById('coming_soon');
    function coming_soon(){
       // cs_modal.style.display="block";
       window.location = "under-construction.php";
    }
    window.onclick = function(event){
        if(event.target == cs_modal){
             cs_modal.style.display="none";
        }
    }
function show_list(){
var i=0;
var j=a+3;
var list = document.querySelectorAll('.list')
var length= list.length;
if(j>length){
    j=length;
    var btn = document.querySelector('#button');
    btn.style.display="none";
}else{
j=a+3;
}
for(i=a;i<j;i++){
list.item(i).style.display="block";
}
a=a+3;

}
$(document).ready(function(){
    var list=document.querySelectorAll('.list') ;
    var i=0;
    if(window.innerWidth<=580){
        i=1;
    }else{if(window.innerWidth<=830){
            i=2;
    }else{
        i=3;
    }
    }
    for(i=3;i<list.length;i++){
        list.item(i).style.display ="none";
    }
    
    $('.ui.dropdown')
  .dropdown()
;
    
});

window.onload = function(){
window.onscroll = stickyNavbar;
    var nav = document.getElementById('nav-bar');
var sticky =nav.offsetTop;
    function stickyNavbar(){
if(window.pageYOffset >= sticky){
    document.getElementById('nav-bar').classList.add('sticky');
    
    
}
else{
    document.getElementById('nav-bar').classList.remove('sticky');
    
}
}  
};

 
        </script>
        
    </body>
</html>







