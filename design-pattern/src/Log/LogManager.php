<?php

namespace Caio\DesignPattern\Log;

abstract class LogManager 
{
    public function log(string $severidade, string $mensagem): void
    {
        
        /** @var LogWriter $logWriter */
        $logWriter = $this->criarLogWriter();


        $dataHoje = date("d/m/Y");
        $mensagemFormadata = "[$dataHoje][$severidade]: $mensagem";
        $logWriter->escreve($mensagemFormadata);
    }

    abstract public function criarLogWriter(): LogWriter;
}