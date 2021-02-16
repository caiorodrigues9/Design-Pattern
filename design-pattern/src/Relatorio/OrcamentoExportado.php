<?php

namespace Caio\DesignPattern\Relatorio;

use Caio\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor'=>$this->orcamento->valor,
            'quantidade_itens'=>$this->orcamento->quantidadeItens  
        ];
    }
}