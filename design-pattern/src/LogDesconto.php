<?php
    namespace Caio\DesignPattern;

    class LogDesconto
    {
        public function informar(float $descontoCalculado): void
        {
            //acessa biblioteca de log
            echo "Salvando log de desconto: $descontoCalculado";
        }
    }
?>