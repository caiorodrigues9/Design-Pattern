<?php

namespace Caio\DesignPattern\Impostos;
use Caio\DesignPattern\Impostos\ImpostoCom2Aliquotas;
use Caio\DesignPattern\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas
{

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor >300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}