<?php

require_once 'vendor/autoload.php';

use Caio\DesignPattern\{Orcamento,Pedido};
use Caio\DesignPattern\Relatorio\{
    OrcamentoExportado,
    PedidoExportado,
    ArquivoXMLExportado,
    ArquivoZipExportado
};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoZipExportado('Orcamento.Array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);