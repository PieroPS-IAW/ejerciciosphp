<?php
//EJERCICIO3
//Crea un programa en php con tres variables aleatorias $n1,$n2,$n3. El programa mostrará sus valores y posteriormente las mostrará los números ordenados de mayor a menor.
$n1 = rand(0,50);
$n2 = rand(0,50);
$n3 = rand(0,50);
echo "$n1,$n2,$n3 <br>";
if ($n1 > $n2 && $n1 > $n3) {
    if ($n2 > $n3) {
        echo "$n1 > $n2 > $n3";
    } else {
        echo "$n1 > $n3 > $n2";
    }
} elseif ($n2 > $n1 && $n2 > $n3) {
    if ($n1 > $n3) {
        echo "$n2 > $n1 > $n3";
    } else {
        echo "$n2 > $n3 > $n1";
    }
} else {
    if ($n1 > $n2) {
        echo "$n3 > $n1 > $n2";
    } else {
        echo "$n3 > $n2 > $n1";
    }
}
?>