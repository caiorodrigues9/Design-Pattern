<?php

namespace Caio\DesignPattern;

class CalculadoraDeImpostos
{
    public function calculadora(Orcamento $orcamento, string $nome)
    {
        return match($nome){
            'ICMS'=> $orcamento->valor * 0.1,
            'ISS'=> $orcamento->valor * 0.06,
        };
        return $orcamento->valor;
    }
}