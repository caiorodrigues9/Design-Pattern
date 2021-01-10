<?php

namespace Caio\DesignPattern\Impostos;

use Caio\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento) :float;
}