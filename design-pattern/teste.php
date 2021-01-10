<?php

use Caio\DesignPattern\CalculadoraDeImpostos;
use Caio\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$caculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

$caculadora->calculadora($orcamento,'ICMS');

