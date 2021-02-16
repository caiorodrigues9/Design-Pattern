<?php

use Caio\DesignPattern\DadosExtrinsecosPedidos;
use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\Pedido;

require_once 'vendor/autoload.php';


$dados = new DadosExtrinsecosPedidos(md5((string) rand(1,1000000) ),new \DateTimeImmutable());

$pedidos = [];

for($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();
   
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();