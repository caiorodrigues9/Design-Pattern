<?php

use Caio\DesignPattern\PdoConnection;

require "vendor/autoload.php";

$pdo = PdoConnection::getInstace("sqlite::memory:");

$pdo2 = PdoConnection::getInstace("sqlite::memory:");

var_dump($pdo,$pdo2);