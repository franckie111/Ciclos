<?php
function factorial($numero) {
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$numero = 5;

$resultado = factorial($numero);

echo "El factorial de $numero es: $resultado\n";

