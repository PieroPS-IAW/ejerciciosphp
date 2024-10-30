<?php
//Crea un programa con una variable aleatoria entre  1 y 50 y escriba la tabla de multiplicar de dicho número.
$numero = rand(1,50);
echo "tabla de $numero<br>";
for ($i = 1; $i <= 10; $i++){
    $producto=$numero*$i;
    echo "$numero x $i = $producto<br>" ;
}
?>