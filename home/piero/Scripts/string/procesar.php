<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$numero1 = (float)htmlspecialchars($_POST['numero1']);
$numero2 = (float)htmlspecialchars($_POST['numero2']);
//Cambiar el archivo para que nos de una bienvienida
echo "BIENVENIDO $nombre $apellido <br>"; 


//Invertir el nombre y apellido
$nombre_invertido = strrev($nombre) ;
$apellido_invertido =strrev ($apellido) ;
echo "$nombre_invertido $apellido_invertido<br>";


//Cuente las letras del nombre, del apellido y las totales.
echo  "Las palabras en tu nombre son: " . strlen($nombre). "<br>";
echo  "Las palabras en tu apellido son: " .strlen($apellido). "<br>";
$nombre_completo = strlen($nombre) + strlen ($apellido);
echo  "Las palabras en tu nombre completos son: " .$nombre_completo. "<br>";

//Escriba nombre y apellido en mayúsculas
echo "Tu nombre en mayusculas:" .strtoupper($nombre). "," .strtoupper($apellido)."<br>";

//Imprimir el primer y ultimo carácter del nombre y el apellido
echo "El primer caracter de tu nombre es:" .$nombre[0]. " y tu ultimo caracter es; ".$nombre[strlen($nombre)-1]. "<br>";
echo "El primer caracter de tu apellido es:" .$apellido[0]. " y tu ultimo caracter es  " .$apellido[strlen($apellido) -1] . "<br>"; 
    
// Reemplazar todas las vocales por "u"
$vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
$nombre_modificado = str_replace($vocales, 'u', $nombre);
$apellido_modificado = str_replace($vocales, 'u', $apellido);

echo "Nombre original: $nombre<br>";
echo "Nombre modificado: $nombre_modificado<br>";
echo "Apellido original: $apellido<br>";
echo "Apellido modificado: $apellido_modificado<br>"; 
//EJERCICIO 2
//mostrar la suma de los números, la diferencia, el cociente y el producto.
echo "La suma de tus numeros son: " .$numero1+$numero2. "<br>";
echo "La diferencia de tus numeros son: " .$numero1-$numero2. "<br>";
if ($numero2 != 0) {
    echo "El cociente de tus numeros son: " .$numero1 / $numero2. "<br>";
} else {
    echo  "No se puede dividir entre cero<br>";
}

echo "El producto de tus numeros son: " .$numero1 * $numero2. "<br>";

}
?>