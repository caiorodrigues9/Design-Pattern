<?php

use Caio\DesignPattern\Log\FileLogManager;
use Caio\DesignPattern\Log\StdOutLogManager;


require "vendor/autoload.php";

/*
$logManager = new StdOutLogManager();
*/
$logManager = new FileLogManager(__DIR__."/log");

$logManager->log('info',"Testando Log Manager");