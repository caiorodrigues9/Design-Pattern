<?php

namespace Caio\DesignPattern\NotaFiscal;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;


    public function valor():float
    {
        return array_reduce($this->itens, function (float $valorAcumulado,$itemAtual) {
                    return $valorAcumulado + $itemAtual->valor;
                }, 
            0)
        ;
    }
}