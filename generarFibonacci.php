<?php
// Función para generar la serie Fibonacci
function generarFibonacci($n) {
    // Si el número ingresado es 0 o negativo, retornamos un mensaje de error
    if ($n <= 0) {
        return "Por favor ingrese un número mayor a 0.";
    }

    // Definir los primeros dos términos de la serie
    $fib = [0, 1];

    // Generar los términos restantes de la serie
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];  // Cada término es la suma de los dos anteriores
    }

    // Devolver la serie generada
    return $fib;
}

// Ejemplo de uso de la función
$n = 10;  // Número de términos que queremos de la serie Fibonacci
echo "Los primeros $n términos de la serie Fibonacci son: ";
print_r(generarFibonacci($n));
?>
