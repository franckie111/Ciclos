<?php

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    echo "Ingrese el número $i: ";
    $numero = intval(trim(fgets(STDIN)));
    $suma += $numero;
}

$promedio = $suma / 10;

echo "La suma de los números ingresados es: $suma\n";
echo "El promedio de los números ingresados es: $promedio\n";
