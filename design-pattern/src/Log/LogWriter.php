<?php

namespace Caio\DesignPattern\Log;

interface LogWriter {
    
    public function escreve(string $mensagemFormatada):void;

}