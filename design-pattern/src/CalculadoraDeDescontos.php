<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\Orcamento;

use Caio\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Caio\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Caio\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}