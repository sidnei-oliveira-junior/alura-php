<?php
/*
$contador = $contador + 1;
$contador += 1;
$contador++;

*/

for ($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

/* Caso eu não queira colocar o 13

for ($contador = 1; $contador <= 15; $contador++) {
    if($contador == 13) {
        continue;//Pula a condição
    }
    echo "#$contador" . PHP_EOL;
}