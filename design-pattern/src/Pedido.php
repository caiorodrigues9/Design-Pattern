<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}