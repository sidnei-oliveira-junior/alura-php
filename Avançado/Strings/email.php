<?php

/* PODE FAZER UTILIZANDO ASPAS SIMPLES
function geraEmail(string $nome)
{

    $conteudoEmail = <<<'FIM'
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoEmail;
}
*/


function geraEmail(string $nome)
{

    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Sidnei de Oliveira Junior');