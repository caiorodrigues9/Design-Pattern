<?php

namespace Caio\DesignPattern\Impostos;

use Caio\DesignPattern\Impostos\Imposto;
use Caio\DesignPattern\Orcamento;

class Iss  implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}