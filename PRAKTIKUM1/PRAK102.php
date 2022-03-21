<?php 

    $r = 4.2;
    $t = 5.4;
    $volume = (3.14*$r*$r*$t)/3;
    $volround = round($volume, 3);
    
    echo "$volround m3";
    
?>