<?php
//EJERCICIO 5
//Crea un programa con una variable booleana $lluvia y una variable $temperatura a las que darás valor en el código. El programa debe dar los siguientes mensajes. 
$lluvia = true;  // true si está lloviendo, false si no
$temperatura = rand(-20, 50);

// Corrección: Usar "==" para comparar valores en vez de "="
if ($lluvia == true) {
    echo "Hoy llueve y la temperatura es: $temperatura<br>";
} elseif ($lluvia == false) {
    echo "Hoy no llueve y la temperatura es: $temperatura<br>";
}

echo "CONSEJO: ";

// Consejos basados en si llueve o no y la temperatura
if ($lluvia && $temperatura >= -10 && $temperatura <= 40) {
    echo "Hoy llueve y debes quedarte en casa.";
} elseif (!$lluvia) {
    if ($temperatura > 20) {
        echo "La temperatura es $temperatura y no llueve. ¡A la playa!";
    } elseif ($temperatura >= -10 && $temperatura <= 5) {
        echo "La temperatura es $temperatura y no llueve. ¡A esquiar!";
    } elseif ($temperatura > 5 && $temperatura <= 20) {
        echo "La temperatura es $temperatura y no llueve. De paseo.";
    }
}

// Comprobar si la temperatura es extrema
if ($temperatura < -10 || $temperatura > 40) {
    echo "La temperatura es $temperatura y es una temperatura extrema.";
}
?>

