<?php

namespace Zwolin\DesignPatterns\FactoryMethod\Api;

use Zwolin\DesignPatterns\FactoryMethod\Product;

interface ProductFactoryInterface
{
    /**
     * @param string $name
     * @param string $sku
     * @return Product
     */
    public function create(string $name, string $sku): Product;
}