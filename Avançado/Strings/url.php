<?php
    $url = 'http://alura.com.us';

    if (str_starts_with($url, 'https')) {
        echo 'É uma URL segura';
    } else {
        echo 'Não é uma URL segura';
    }

    echo PHP_EOL;

    if (str_ends_with($url, '.br')) {
        echo 'É um domínio do Brasil';
    } else {
        echo 'Não é um domínio do Brasil';
    }

    echo PHP_EOL;