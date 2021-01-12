<?php

namespace Caio\DesignPattern;
use Caio\DesignPattern\{Pedido,Orcamento,Command};

class GerarPedido implements Command
{
    private float $valorDoPedido;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorDoPedido,
        int $numeroItens,
        string $nomeCliente
    )
    {
        $this->valorDoPedido = $valorDoPedido;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
        $orcamento = new Orcamento();

        $orcamento->valor = $this->valorDoPedido;
        $orcamento->quantidadeItens = $this->numeroItens;

        $pedido = new Pedido();

        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no Banco de Dados".PHP_EOL;
        echo "Envia e-mail ao cliente".PHP_EOL;
    }
}