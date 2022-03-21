<?php 

    $c = 37.841;
    $f = round((($c * 1.8) + 32), 4);
    $re = round(($c * 0.8), 4);
    $k = round(($c + 273.15), 4);

    echo "Fahrenheit (F) = $f<br>";
    echo "Reamur (R) = $re<br>";
    echo "Kelvin (K) = $k";
    
?>