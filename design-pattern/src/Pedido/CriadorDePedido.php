<?php

namespace Caio\DesignPattern\Pedido;

use Caio\DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $template = [];
    
    public function criaPedido(
        string $nomeCliente, 
        string $dataFormatada, 
        Orcamento $orcamento
    ): Pedido {
        
        $template = $this->gerarTemplatePedido($nomeCliente,$dataFormatada);

        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido($nomeCliente,$dataFormatada): TemplatePedido 
    {
        $hash = md5($nomeCliente.$dataFormatada);
        
        if(!array_key_exists($hash,$this->template)) {
            
            $template = new TemplatePedido(
                $nomeCliente, 
                new \DateTimeImmutable($dataFormatada)
            );

            $this->template[$hash] = $template;
        }

        return $this->template[$hash];
    }
}