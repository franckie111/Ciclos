<?php
$numFilas = 5;

for ($i = 1; $i <= $numFilas; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}


for ($i = $numFilas - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
    }
