<?php

use Caio\DesignPattern\CacheOrcamentoProxy;
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

$orcamentoMaisAntigo = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 100;

$item5 = new ItemOrcamento();
$item5->valor = 50;

$orcamentoMaisAntigo->adicionaItem($item4);
$orcamentoMaisAntigo->adicionaItem($item5);

$orcamento->adicionaItem($orcamentoMaisAntigo);

$orcamentoCache = new CacheOrcamentoProxy($orcamento);

echo $orcamentoCache->valor().PHP_EOL;
echo $orcamentoCache->valor();