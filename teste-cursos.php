<?php

$cursos = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleção em PHP'
];

$cursosOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];


$novoArray = array_merge($cursos, $cursosOo);

array_unshift($novoArray, 'Instalando PHP');

$intro = array_shift($novoArray);

var_dump($intro);