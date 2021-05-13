<?php

use Caio\DesignPattern\ItemOrcamento;
use Caio\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Caio\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require "vendor/autoload.php";

//$builder = new ConstrutorNotaFiscalProduto();
$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 200;
$item4 = new ItemOrcamento();
$item4->valor = 2000;

$notaFiscal = $builder->informacoesBasicas("1111113235","Caio Rodrigues Consultoria")
    ->itens($item1)
    ->itens($item2)
    ->itens($item3)
    ->itens($item4)
    ->comObservacoes("Nota fiscal construida com um construtor")
    ->constroi();

echo $notaFiscal->valor().PHP_EOL;
echo $notaFiscal->valorImpostos.PHP_EOL;

