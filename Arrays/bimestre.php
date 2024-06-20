<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,

];

//Vou pegar desses alunos faltantes apenas as chaves
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notas_Alunos = array_values($alunosFaltantes);

var_dump(array_combine($notas_Alunos, $nomesAlunos)) . PHP_EOL;


//Função que pega um array e inverte o que é chave vira valor, e valor vira chave
var_dump(array_flip($alunosFaltantes));


//A nota do primeiro bimestre dos alunos que faltaram
//var_dump(array_values($alunosFaltantes));

//Função que retorna um array com os valores(ou seja as notas) dos elementos que está no primeiro e não está no segundo
//var_dump(array_diff($notasBimestre1, $notasBimestre2));


//Mesma função decima, mas agora utilizando as chaves.
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Função que compara chave e valor
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));