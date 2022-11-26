<?php

use Zwolin\DesignPatterns\Builder\ProductBuilder;

require __DIR__ . '/vendor/autoload.php';

$builder = new ProductBuilder();

$product = $builder->setName('Sample product1')
            ->addCountryPl()
            ->addCountryUk()
            ->setPrice(100.50)
            ->publish()
            ->useInFeed()
            ->create();

echo 'You have created product! Product settings above: ' . PHP_EOL;

$product->display();