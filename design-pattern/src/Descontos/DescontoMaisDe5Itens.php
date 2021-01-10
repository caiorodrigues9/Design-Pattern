<?php

namespace Caio\DesignPattern\Descontos;

use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\Descontos\Desconto;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens >5){
            return $orcamento->valor *0.1;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);        
    }
}