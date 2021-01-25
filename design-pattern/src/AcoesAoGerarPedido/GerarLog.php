<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;
use SplSubject;

class GerarLog implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Gerando log do Pedido";
    }
}