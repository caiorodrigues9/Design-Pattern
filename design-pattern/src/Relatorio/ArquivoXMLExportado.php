<?php


namespace Caio\DesignPattern\Relatorio;

class ArquivoXMLExportado implements ArquivoExportado
{
    private string $nomeDoElementoPai;

    public function __construct($nomeDoElementoPai)
    {
        $this->nomeDoElementoPai = $nomeDoElementoPai;
    }
    
    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeDoElementoPai}/>");
        foreach($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item,$valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(),'xml');

        $elementoXml->asXML($caminhoArquivo);
        
        return $caminhoArquivo;
    }
}