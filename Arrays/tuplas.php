<?php

$dados = ['Vinicius', 10, 24];
/*
$nome = $dados[0];
$nota = $dados[1];
$idade = $dados[2];
*/

list($nome, $nota, $idade) = $dados;
var_dump($nome, $nota, $idade);

