<?php

use Caio\DesignPattern\Venda\VendaProdutoFactory;
use Caio\DesignPattern\Venda\VendaServicoFactory;

require "vendor/autoload.php";

//$fabricaVenda = new VendaServicoFactory('Caio Rodrigues');
$fabricaVenda = new VendaProdutoFactory(500);
$venda = $fabricaVenda->criarVenda();

$imposto = $fabricaVenda->imposto();

var_dump($venda,$imposto);