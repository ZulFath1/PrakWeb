<?php
$c = 37.841;
$r = 4/5*$c;
$f = (9/5*$c)+32;
$k = $c + 273.15;

echo "Fahrenheit (F) = " . number_format($f, 4)."<br>";
echo "Reamur (R) = " . number_format($r, 4)."<br>";
echo "Kelvin (K) = " . number_format($k, 4);
?>
