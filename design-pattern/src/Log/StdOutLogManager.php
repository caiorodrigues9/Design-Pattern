<?php

namespace Caio\DesignPattern\Log;

class StdOutLogManager extends LogManager
{
    public function criarLogWriter(): LogWriter
    {
        return new StdOutLogWrite();
    }
}