/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
function preloader(){
var pre_loader = document.getElementById('load-container');
var loader = document.getElementById('load-screen');
setTimeout(function(){
    pre_loader.style.display="none";
    loader.style.display="block";
},3000);
};
*/
function parallax_bg(){
	var elm = document.getElementById('parallax');
	var yOffset = window.pageYOffset;
	var height = window.innerHeight;
	yOffset =  - (yOffset/2);
	var pos = elm.style.backgroundPosition;
	var posx = '0';
	var posy =String(yOffset);
	elm.style.backgroundPosition = posx +"px " + posy + "px"; 

}
window.onscroll = parallax_bg;
