<?php

namespace Caio\DesignPattern;

use Caio\DesignPattern\AcoesAoGerarPedido\AcoesAoGerarPedido;
use DateTimeImmutable;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
    private $acoesAposGerarPedido = [];

    public function __construct(/* Pedido Repository, Mail Service */)
    {
        
    }

    public function adicionaAcaoAoGerarPeido(AcoesAoGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach($this->acoesAposGerarPedido as $acao)
        {
            $acao->executaAcao($pedido);
        }
    }
}