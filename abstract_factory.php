<?php

use Zwolin\DesignPatterns\AbstractFactory\Computer;
use Zwolin\DesignPatterns\AbstractFactory\Factory\CasualComputerFactory;
use Zwolin\DesignPatterns\AbstractFactory\Factory\OfficeComputerFactory;
use Zwolin\DesignPatterns\AbstractFactory\Factory\GamingComputerFactory;

require __DIR__ . '/vendor/autoload.php';


$computer = new Computer();

$computer->displaySpecification(new OfficeComputerFactory());
$computer->displaySpecification(new CasualComputerFactory());
$computer->displaySpecification(new GamingComputerFactory());
