<?php

namespace Caio\DesignPattern\Impostos;

use Caio\DesignPattern\Impostos\Imposto;
use Caio\DesignPattern\Orcamento;

class Icms extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}