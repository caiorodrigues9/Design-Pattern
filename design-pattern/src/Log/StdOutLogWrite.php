<?php

namespace Caio\DesignPattern\Log;

class StdOutLogWrite implements LogWriter
{
    public function escreve(string $mensagemFormatada):void 
    {
        echo $mensagemFormatada;
    }
}