<?php
echo "Ingrese el número de términos de la serie de Fibonacci: ";
$n = intval(trim(fgets(STDIN)));

$term1 = 0;
$term2 = 1;

$suma = 0;

echo "Los primeros $n términos de la serie de Fibonacci son: ";
for ($i = 1; $i <= $n; $i++) {
    echo "$term1 ";
    $suma += $term1;

    $siguiente = $term1 + $term2;

    $term1 = $term2;
    $term2 = $siguiente;
}

echo "\nLa suma de los primeros $n términos de la serie de Fibonacci es: $suma\n";
