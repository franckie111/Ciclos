<?php
function imprimirPatronZ($altura) {
 for ($i = 1; $i <= $altura; $i++) {
 for ($j = 1; $j <= $altura; $j++) {
 if ($i == 1 || $i == $altura || $j == $altura - $i + 1) {
 echo "*";
 } else {
echo " ";
 }
 }
   echo "\n";
    }
}
$altura = 7;
imprimirPatronZ($altura);

