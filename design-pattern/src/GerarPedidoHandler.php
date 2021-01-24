<?php

namespace Caio\DesignPattern;


use DateTimeImmutable;

class GerarPedidoHandler
{
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
        
        //Pedido Repository para gravar os dados
        echo "Cria pedido no Banco de Dados".PHP_EOL;
        
        //Mail Service encaminha e-mail
        echo "Envia e-mail ao cliente".PHP_EOL;
    }
}