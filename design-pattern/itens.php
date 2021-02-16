<?php

use Caio\DesignPattern\ItemOrcamento;
use Caio\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item1->valor = 300;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->adicionaItem($item1);
$orcamento->adicionaItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;

$orcamentoAntigo->adicionaItem($item3);

$orcamento->adicionaItem($orcamentoAntigo);

echo $orcamento->valor();