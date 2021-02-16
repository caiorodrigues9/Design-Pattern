<?php

require_once 'vendor/autoload.php';

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\Relatorio\OrcamentoZip;



$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 8;

$orcamentoZip->exportar($orcamento);