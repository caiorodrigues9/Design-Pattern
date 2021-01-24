<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;

interface AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}