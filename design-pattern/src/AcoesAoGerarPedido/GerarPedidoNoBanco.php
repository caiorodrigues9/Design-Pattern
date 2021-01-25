<?php

namespace Caio\DesignPattern\AcoesAoGerarPedido;

use Caio\DesignPattern\Pedido;

class GerarPedidoNoBanco implements AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando Pedido no banco de dados";
    }
}