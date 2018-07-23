/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var img =[];
img[0]="asset/img/anw1.jpg";
img[1]="asset/img/anw2.jpg";
img[2]="asset/img/anw3.jpg";
img[3]="asset/img/anw4.jpg";
img[4]="asset/img/anw5.jpg";
var i=0;
var timeout=4000;
var slide = document.getElementById('slideshow');
function imageChange(){
    
   document.getElementById('slideshow').style.opacity="0";
    setTimeout(function(){
        document.getElementById('slideshow').src=img[i];
        document.getElementById('slideshow').style.opacity="1";
    },1000);
    i++;
    if(i==img.length){
        i=0;
    }
    setTimeout("imageChange()",timeout);
}
