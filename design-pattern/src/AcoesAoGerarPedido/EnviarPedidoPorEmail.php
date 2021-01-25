<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando Email de Pedido Gerado";
    }
}