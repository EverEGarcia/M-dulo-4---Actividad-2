<?php
// Función para verificar si un número es primo
function esPrimo($numero) {
    // Un número menor o igual a 1 no es primo
    if ($numero <= 1) {
        return false;
    }

    // Verificar si el número tiene algún divisor distinto de 1 y sí mismo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;  // Si es divisible por algún número, no es primo
        }
    }

    // Si no tiene divisores, es primo
    return true;
}

// Ejemplo de uso de la función
$numero = 29;
if (esPrimo($numero)) {
    echo "$numero es un número primo.\n";
} else {
    echo "$numero no es un número primo.\n";
}
?>
