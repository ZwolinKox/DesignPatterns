<?php

use Zwolin\DesignPatterns\FactoryMethod\Factory\ConfigurableProductFactory;
use Zwolin\DesignPatterns\FactoryMethod\Factory\SimpleProductFactory;
use Zwolin\DesignPatterns\FactoryMethod\Factory\VirtualProductFactory;

require __DIR__ . '/vendor/autoload.php';

$configurableFactory = new ConfigurableProductFactory();
$simpleFactory = new SimpleProductFactory();
$virtualFactory = new VirtualProductFactory();


$configurable = $configurableFactory->create('Configurable product', 'config-01');
$simple = $simpleFactory->create('Simple product', 'simple-01');
$virtual = $virtualFactory->create('Virtual product', 'virtual-01');


$configurable->display();

echo '---------------------' . PHP_EOL;

$simple->display();

echo '---------------------' . PHP_EOL;

$virtual->display();