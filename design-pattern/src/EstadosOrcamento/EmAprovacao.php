<?php

namespace Caio\DesignPattern\EstadosOrcamento;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\EstadosOrcamento\Aprovado;
use Caio\DesignPattern\EstadosOrcamento\Reprovado;
use Caio\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.5;
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}