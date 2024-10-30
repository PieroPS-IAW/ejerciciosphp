<?php 
//Crea un programa que simule el lanzamiento de un dado 10 veces. Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la suma acumulada.
// Inicializar la suma acumulada en 0
$suma = 0;

// Simular 10 lanzamientos de dado
for ($i = 1; $i <= 10; $i++) {
    // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
    $dado = rand(1, 6);
    
    // Actualizar la suma acumulada
    $suma += $dado;
    
    // Mostrar el número de lanzamiento, el valor del dado y la suma acumulada
    echo "Lanzamiento $i: Numero del dado  = $dado, Suma acumulada = $suma_acumulada<br>";
}
?>
