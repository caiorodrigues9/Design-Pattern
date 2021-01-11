<?php

require 'vendor/autoload.php';
use Caio\DesignPattern\{GerarPedido};



$valorDoOrcamento = $argv[1]; 
$numeroDeItens = $argv[2];
$nomeDoCliente = $argv[3];

$pedido = new GerarPedido($valorDoOrcamento,$numeroDeItens,$nomeDoCliente);

$pedido->execute();
