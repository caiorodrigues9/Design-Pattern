<?php

require_once 'vendor/autoload.php';
use Caio\DesignPattern\{GerarPedido, GerarPedidoHandler};
use Caio\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Caio\DesignPattern\AcoesAoGerarPedido\GerarLog;
use Caio\DesignPattern\AcoesAoGerarPedido\GerarPedidoNoBanco;

$valorDoOrcamento = $argv[1]; 
$numeroDeItens = $argv[2];
$nomeDoCliente = $argv[3];

$pedido = new GerarPedido($valorDoOrcamento,$numeroDeItens,$nomeDoCliente);

$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcaoAoGerarPeido(new GerarPedidoNoBanco);
$gerarPedidoHandler->adicionaAcaoAoGerarPeido(new EnviarPedidoPorEmail);
$gerarPedidoHandler->adicionaAcaoAoGerarPeido(new GerarLog);
$gerarPedidoHandler->execute($pedido);