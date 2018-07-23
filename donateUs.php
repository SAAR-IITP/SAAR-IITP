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
                <a href="#">HOME</a>
                <a href="#way">WAYS TO DONATE</a>
                <a href="#donate_for">DONATE FOR</a>
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
                        <button type="submit" id="PTP" class="w2d"><a href="#donate_for">Continue</a></button>
                    </div>
                    <div class="cell">
                        <h3>Net Banking</h3>
                        <p>Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere.
                            Suscipit odit quas nemo, enim laudantium. </p>
                        <button type="submit" id="PTP" class="w2d"><a href="#donate_for">Continue</a></button>
                    </div>
                </div>
            </div>
            
        </section>
        <section id="donate_for">
                    <div class="donate_for_container">
                        <div class="donate_for_title">
                            <h1>Donate To Our Leaders</h1>
                        </div>
                        <div class="donate_content">
                            <div class="list" ><div id="anwesha"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="HOSCA"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="E-club"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Celesta"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="ACE"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Sparkonics"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="NJACK"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Threshold"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Robocon"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="list" ><div id="Supra-Baha"><span><a href="#">Donate Now</a></span></div></div>
                            <div class="btn"><span id="button" onclick="show_list()">more</span></div>
                        </div>
                        
                    </div>
        </section>
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
                    <div class=" field">
                        <label id="branch">Department</label>
                    <div class="sel">       
                     
                     <select id="branch" name="dept" class="">
                            <option value=""></option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="EE">Electrical Engineering</option>
                        <option value="ME">Mechanical Engineering</option>
                        <option value="CE">Chemical Engineering</option>
                        <option value="CBE">Chemical and Biochemical Engineering</option>
                        </select>
                    </div>
                    </div>
                    <div class="field">
                        <label for="donate_to">Donate </label>
                        <input type="text" name="donate_to" id="donate_to">
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





<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

