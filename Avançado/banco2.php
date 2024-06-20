
<?php

/*
function adiciona2 ($x)
{
    return $x + 2;
}

$sete = adiciona2(5);
echo $sete;


exit();


function exibeOlaMundo ()
{
    echo "Olá mundo!";
}

require_once garante que p rquivo será aberto apenas uma vez
*/

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

//unset remove a variável da memória
unset($contasCorrentes['123.456.689-11']);

titularcomLetrasMaiusculas($contasCorrentes['123.256.789-12']);


/*DESCONSIDERAR O CÓDIGO ABAIXO,POIS É UMA AMOSTRA PRIMITIVA
if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    exibeMensagem("Você não pode sacar");
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.689-11']['saldo']) {
    exibeMensagem("Você não pode sacar");
} else {
    $contasCorrentes['123.456.689-11']['saldo'] -= 500;
}

SAQUE
contador += 1; estou subraindo 500 reais da conta corrente
$contasCorrentes['123.456.789-10']['saldo'] -= 500;



echo "<ul>"; //QUERO INICIAR UMA LISTA DO HTML ABAIXO

foreach ($contasCorrentes as $cpf => $conta) {

    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeConta($conta);
    LOGO POSSO UTILIZAR A VARIAVAEL TITULAR E A SALDO.
    exibeMensagem($cpf . " " . $conta['titular'] .  ' ' . $conta['saldo']);
    
    echo $cpf . " " . $conta['titular'] .  ' ' . $conta['saldo'] . PHP_EOL;
    
}

echo "</ul>"; //FECHAR A LISTA DO HTML

*/

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
        <dl>
            <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?php echo $cpf; ?></h3>
            </dt>
            <dd>
                Saldo:<?= " R$ $conta[saldo]" ?>
            </dd>
            <?php } ?>
        </dl>
</body>
</html>

