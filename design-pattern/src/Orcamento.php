<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\EstadosOrcamento\EmAprovacao;
use Caio\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;
    

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function retprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

    public function adicionaItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce($this->itens,
            fn (float $valorAcumulado,Orcavel $item) => $item->valor() + $valorAcumulado,
            0 
        );
    }
}