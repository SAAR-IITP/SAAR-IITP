<?php
    $a;
    $array =  array("a" => "orange", "b" => "banana", "c" => "apple");
    $array += array("d" => "new");
    $ar2 = array("this","that","there","from");
    $ar3 = $ar2;
    foreach($ar3 as $a){
        echo"<div class='alert alert-danger'>".$a."</div>";
    }
 
?>