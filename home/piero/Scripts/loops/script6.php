<?php
//Crea un programa con una variable $n1 a la que daremos valor en el código. El programa mostrará todos los divisores de ese número.
$n1 = rand(1,100);
echo "Los divisores de $n1 son: ";
for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo "$i ";  // Mostrar el divisor
    }
}
?>
