<?php

namespace Caio\DesignPattern\Pedido;

use Caio\DesignPattern\Orcamento;

class Pedido
{
    public TemplatePedido $template;
    public Orcamento $orcamento;
}