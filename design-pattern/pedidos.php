<?php

use Caio\DesignPattern\Pedido\TemplatePedido;
use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\Pedido\CriadorDePedido;
use Caio\DesignPattern\Pedido\Pedido;

require_once 'vendor/autoload.php';


$criadorPedido = new CriadorDePedido();

$pedidos = [];

for($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Caio Rodrigues',
        date('Y-m-d'),
        $orcamento
    );
   
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();