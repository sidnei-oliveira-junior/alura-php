<?php

//Arrays Associativo

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

/*Versão Original
$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];
*/

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12345678912 => $conta3
];


// O índice é o cpf e o valor sendo conta
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}