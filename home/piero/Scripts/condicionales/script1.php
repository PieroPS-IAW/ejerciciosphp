<?php
//EJERCICIO1
//Crea un programa en php con una variable $numero con un valor aleatoria entre -10 y 10 El programa debe escribir un mensaje indicando si número es positivo, negativo o cero.
// USAR UN NUMERO ENTRE -10 Y 10
$numero = rand(-10,10);
echo "$numero <br>";
// Condicional para verificar su naturaleza
if ($numero > 0) {
    echo "$numero es positivo";
} elseif ($numero <0 ) {
    echo "$numero es negativo";
}else {
    echo "$numero es cero";
}
?>