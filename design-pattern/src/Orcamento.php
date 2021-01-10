<?php

namespace Caio\DesignPattern;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public string $estadoAtual;

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->calculaDescontoExtra();
    }

    public function calculaDescontoExtra(): float
    {
        if($this->estadoAtual == "EM APROVACAO"){
            return $this->valor * 0.5;
        }
        
        if($this->estadoAtual == "APROVADO"){
            return $this->valor * 0.2;
        }

        throw new \DomainException(
            message:'Orçamentos aprovados e reprovados não podem receber desconto extras'
        );


    }
}