<?php

namespace Caio\DesignPattern;

use ArrayIterator;

class ListaOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[]  */
    private array $orcamentos;

    public function __construct()
    {
        $orcamento = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] =$orcamento; 
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }

}