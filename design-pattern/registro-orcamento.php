<?php

require_once 'vendor/autoload.php';

use Caio\DesignPattern\Http\ReactPHPHttpAdapter;
use Caio\DesignPattern\Orcamento;
use Caio\DesignPattern\RegistroOrcamento;



$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
