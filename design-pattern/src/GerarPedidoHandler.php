<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\AcoesAoGerarPedido\AcoesAoGerarPedido;
use DateTimeImmutable;
use SplObserver;

class GerarPedidoHandler implements \SplSubject
{
    /** @var SplSubject[] */
    private $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct(/* Pedido Repository, Mail Service */)
    {
        
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();

        $orcamento->valor = $gerarPedido->getValorDoPedido();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();

        $pedido = new Pedido();

        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->orcamento = $orcamento;
        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        
    }
    
    public function notify()
    {
        foreach($this->acoesAposGerarPedido as $acao)
        {
            $acao->update($this);
        }
    }

}