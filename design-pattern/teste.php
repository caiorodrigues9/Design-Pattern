<?php

use Caio\DesignPattern\CalculadoraDeImpostos;
use Caio\DesignPattern\Impostos\Icms;
use Caio\DesignPattern\Impostos\Iss;
use Caio\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$caculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $caculadora->calculadora($orcamento,new Icms());

