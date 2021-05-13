<?php


namespace Caio\DesignPattern\Venda;

use Caio\DesignPattern\Impostos\Icms;
use Caio\DesignPattern\Impostos\Imposto;


class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;
    
    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }
    
    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }
    public function imposto():Imposto
    {
        return new Icms();
    }
}