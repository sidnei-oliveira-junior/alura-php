<?php

$notas = [
    'Ana' => null,
    'João' => 8,
    'Maria' => 10,
    'Roberto' => 7,
    'Sidnei' => 6
];

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;

/*

ksort($notas);
// arsort($notas); ordena pela nota
var_dump($notas);

echo 'Sidnei fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Sidnei', $notas)); tentar acessar a nota do aluno e ver se ela está lá

echo 'Ana fez a prova: ' . PHP_EOL;
//Verificando se um valor ou uma variavel está definida
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

CONCEITOS BÁSICOS
array_key_exists = verifica se a chave existe
in_array = verifica se o valor existe
isset = verifica se a chave existe e não é nula


 */
