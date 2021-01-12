<?php

namespace Caio\DesignPattern\EstadosOrcamento;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            message:'Orçamentos Finalizado não podem receber descontos'
        );
    }
}