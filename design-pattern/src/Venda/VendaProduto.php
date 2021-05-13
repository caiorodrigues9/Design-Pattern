<?php

namespace Caio\DesignPattern\Venda;

class VendaProduto extends venda
{
    /**
     * @var int peso em gramas
     */
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}