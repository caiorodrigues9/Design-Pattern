<?php

namespace Caio\DesignPattern\EstadosOrcamento;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Caio\DesignPattern\EstadosOrcamento\Finalizado;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.2;
    }

    public function Finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}