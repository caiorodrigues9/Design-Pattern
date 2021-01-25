<?php

require_once 'vendor/autoload.php';

use Caio\DesignPattern\ListaOrcamentos;
use Caio\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->retprova();
$orcamento2->valor = 150.00;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350;

$listaOrcamentos = new ListaOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento){
    echo "Valor: ".$orcamento->valor.PHP_EOL;
    echo "Estado: ".get_class($orcamento->estadoAtual).PHP_EOL;
    echo "Itens: ".$orcamento->quantidadeItens.PHP_EOL;
    echo PHP_EOL;
}

