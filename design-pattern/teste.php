<?php

use Caio\DesignPattern\CalculadoraDeDescontos;
use Caio\DesignPattern\CalculadoraDeImpostos;
use Caio\DesignPattern\Impostos\Icms;
use Caio\DesignPattern\Impostos\Icpp;
use Caio\DesignPattern\Impostos\Ikcv;
use Caio\DesignPattern\Impostos\Iss;
use Caio\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$caculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 600;
$orcamento->quantidadeItens = 2;

echo $caculadora->calculadora($orcamento,new Icms());

/*
$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDesconto($orcamento);
*/