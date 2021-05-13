<?php


namespace Caio\DesignPattern\NotaFiscal;

use Caio\DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;
    
    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function informacoesBasicas(string $cnpj,$razaoSocial)
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function itens(ItemOrcamento $item)
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacao)
    {
        $this->notaFiscal->observacoes = $observacao;

        return $this;
    }

    public function comEmissao(\DateTimeInterface $dataEmissao)
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function constroi():NotaFiscal;
}