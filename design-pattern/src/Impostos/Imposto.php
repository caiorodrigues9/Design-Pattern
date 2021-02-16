<?php

namespace Caio\DesignPattern\Impostos;

use Caio\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }
    
    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento) :float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoOutroImposto($orcamento);
    }

    public function realizaCalculoOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }

}