<?php

namespace Caio\DesignPattern\Relatorio;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}