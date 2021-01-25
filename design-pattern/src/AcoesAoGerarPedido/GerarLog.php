<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;

class GerarLog implements AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log do Pedido";
    }
}