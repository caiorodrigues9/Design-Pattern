<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calculadora(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}