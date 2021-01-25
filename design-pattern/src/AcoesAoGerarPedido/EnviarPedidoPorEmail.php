<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;
use SplSubject;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo $pedido->pedido->nomeCliente;
        echo "Enviando Email de Pedido Gerado";
    }
}