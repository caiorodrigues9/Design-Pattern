<?php

namespace Caio\DesignPattern\Descontos;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\Descontos\Desconto;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->valor >=500){
            return $orcamento->valor *0.05;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);                
    }
}