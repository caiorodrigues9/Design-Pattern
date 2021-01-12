<?php

namespace Caio\DesignPattern\EstadosOrcamento;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Caio\DesignPattern\EstadosOrcamento\Finalizado;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            message:'Orçamentos Reprovados não podem receber descontos'
        );
    }

    public function Finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}