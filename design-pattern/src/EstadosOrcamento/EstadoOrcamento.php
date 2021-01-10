<?php

namespace Caio\DesignPattern\EstadosOrcamento;

use Caio\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @thowns \Domain Exception
     */

    abstract public function calculaDescontoExtra(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException(
            message:'Orçamento não pode ser aprovado'
        );
    }

    public function cancela(Orcamento $orcamento)
    {
        throw new \DomainException(
            message:'Orçamento não pode ser cancelado'
        );
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException(
            message:'Orçamento não pode ser reprova'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException(
            message:'Orçamento não pode ser reprova'
        );
    }
}