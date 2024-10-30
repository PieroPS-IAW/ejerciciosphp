<?php
//Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea menor que 100.

// Inicializar la suma acumulada y el contador de lanzamientos
$suma= 0;
$numero_lanzamiento = 0;

// Continuar lanzando el dado hasta que la suma acumulada sea 100 o más
while ($suma < 100) {
    // Incrementar el contador de lanzamientos
    $numero_lanzamiento++;
    
    // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
    $dado = rand(1, 6);
    
    // Actualizar la suma acumulada
    $suma += $dado;
    
    // Mostrar el número de lanzamiento, el valor del dado y la suma acumulada
    echo "Lanzamiento $numero_lanzamiento: Valor del dado = $dado, Suma acumulada = $suma<br>";
}
?>
