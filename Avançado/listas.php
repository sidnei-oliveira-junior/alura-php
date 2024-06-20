<?php

$idadeList = [21, 23, 1, 25, 30,41, 18];

/*
$idadeVinicius = $idadeList[0];
$idadeJoao = $idadeList[1];
$idadeMaria = $idadeList[2];

PODE SER RESUMIDO NUMA ÚNICA LINHA
*/

list($idadeVinicius, $idadeJoao, $idadeMaria) =$idadeList;
unset($idadeList[4]);

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}


