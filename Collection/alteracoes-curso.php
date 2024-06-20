<?php

require_once 'Curso.php';

$curso = new Curso('Collection com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}

$curso->adicionaAlunoParaEspera('Patricia Feitas');
$curso->adicionaAlunoParaEspera('Vinicius Dias');
$curso->adicionaAlunoParaEspera('Ana Maria');

foreach ($curso->recuperaAlunosEsperando() as $aluno) {
    echo $aluno . PHP_EOL;
}

$curso->matriculaAluno('Patricia Freita');
$curso->matriculaAluno('Rogério');
$curso->matriculaAluno('Patricia Freitas');

echo '---------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
    echo $aluno . PHP_EOL;
}
