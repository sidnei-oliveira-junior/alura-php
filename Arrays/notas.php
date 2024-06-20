<?php
$notas = [
    [
        'aluno' => 'Maria',
        'notas' => 10,
    ],
    [
        'aluno' => 'Sidnei',
        'notas' => '9',
    ],
    [
        'aluno' => 'Ana',
        'notas' => 3,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];
    
    /* O OPERADOR ESPAÇONAVE faz tudo isso 
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }
    
    return 0;

    */
}

usort($notas, 'ordenaNotas');
var_dump($notas);