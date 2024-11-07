<?php
//Partiendo del programa anterior indica si el número es primo o no.
$n1 = rand(1,100);
$contador_divisores = 0;
echo "Los divisores de $n1 son: ";
for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo "$i ";  // Mostrar el divisor
        $contador_divisores++;  // Incrementar el contador de divisores
    }
}
// Verificar si el número es primo
if ($contador_divisores == 2) {
    echo "<br>$n1 es un número primo.";
} else {
    echo "<br>$n1 no es un número primo.";
}
?>