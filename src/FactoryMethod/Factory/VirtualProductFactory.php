<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\FactoryMethod\Factory;

use Zwolin\DesignPatterns\FactoryMethod\Api\ProductFactoryInterface;
use Zwolin\DesignPatterns\FactoryMethod\Product;

class VirtualProductFactory implements ProductFactoryInterface
{
    /**
     * @param string $name
     * @param string $sku
     * @return Product
     */
    public function create(string $name, string $sku): Product
    {
        $product = new Product($name, $sku, false, null, Product::TYPE_VIRTUAL);

        return $product;
    }
}