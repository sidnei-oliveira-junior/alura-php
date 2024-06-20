<?php

    $nome = 'Vinicius Dias';
    $email = 'vinicíus @alura.com.br';
    $senha = '123';
    $tam = 0;

    echo mb_strlen($senha);
    //$tam = mb_strlen($senha);
    //echo "Tamanh da string = $tam" . PHP_EOL;

    $posicaoDoArroba = strpos($email, '@');

    $usuario = substr($email, 0, $posicaoDoArroba);

    echo mb_strtoupper($usuario) . PHP_EOL;
    echo mb_strtolower($usuario) . PHP_EOL;

    //echo substr($email, 0, 4) . PHP_EOL;
    echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
    list($nome, $sobrenome) = explode(' ', $nome);

    echo 'Nome: ' . $nome . PHP_EOL;
    echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

    $csv = 'Vinicius Dias, 24, vinicius@alura.com.br';
    var_dump(explode(', ', $csv));

    echo trim($email, 'v') .PHP_EOL; //remove os espaços