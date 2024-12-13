<?php
// Función para verificar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Convertir la cadena a minúsculas y eliminar espacios
    $cadena = strtolower(preg_replace('/\s+/', '', $cadena));

    // Invertir la cadena
    $invertida = strrev($cadena);

    // Comparar la cadena original con la invertida
    if ($cadena == $invertida) {
        return true;  // Si son iguales, es un palíndromo
    }

    return false;  // Si no son iguales, no es un palíndromo
}

// Ejemplo de uso de la función
$cadena = "Anita lava la tina";
if (esPalindromo($cadena)) {
    echo "\"$cadena\" es un palíndromo.\n";
} else {
    echo "\"$cadena\" no es un palíndromo.\n";
}
?>
