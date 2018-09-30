/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global modal */

function colorChange(){
    if( document.documentElement.scrollTop >50){
    document.getElementById('nav-bar').className="nav-scroll";
    }
    else{
        document.querySelector('#nav-bar').classList.remove("nav-scroll");
        document.getElementById('nav-bar').style.backgroundColor="#333";
    }
}

window.onscroll =colorChange;

