<?php
//EJERCICIO 1 
//Crea un programa en php que genere 20 números aleatorios entre 1 y 6 y los muestre por pantalla.
$numeros_aleatorios = [];

// Generar 20 números aleatorios entre 1 y 6
for ($i = 0; $i < 20; $i++) {
    $numeros_aleatorios[] = rand(1, 6); 
}

// Mostrar los números generados
echo "Números aleatorios generados:<br>";
foreach ($numeros_aleatorios as $numero) {
    echo $numero . " ";
}
?>