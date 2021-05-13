<?php

namespace Caio\DesignPattern\Venda;

use Caio\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto():Imposto;
}