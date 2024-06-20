<?php  

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Sidnei de Oliveira Junior', 
    new CPF('406.924.788-25'),
    'Desenvolvedor', 1000
);


$umaFuncionaria = new Funcionario(
    'Sandra Maia Pavan',
    new CPF('123.456.789-10'),
    'QA', 3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();

