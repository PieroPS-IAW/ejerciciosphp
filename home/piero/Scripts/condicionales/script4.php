<?php
//EJERCICIO4
//Crea un programa en php que genere un numero aleatorio entre 1 y 7. El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el 7.
$n1 = rand(1, 7);
echo "$n1 <br>";
switch ($n1) {
    case 1:
        echo "Es lunes";
        break;
    case 2:
        echo "Es martes";
        break;
    case 3:
        echo "Es miércoles";
        break;
    case 4:
        echo "Es jueves";
        break;
    case 5:
        echo "Es viernes";
        break;
    case 6:
        echo "Es sábado";
        break;
    case 7:
        echo "Es domingo";
        break;
}
?>
