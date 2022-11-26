<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Builder;

use Zwolin\DesignPatterns\Builder\Api\BuilderInterface;

class ProductBuilder implements BuilderInterface
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->clear();
    }

    /**
     * @return void
     */
    private function clear()
    {
        $this->product = new Product;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->product->setName($name);

        return $this;
    }

    /**
     * @return $this
     */
    public function addCountryPl()
    {
        $this->product->addCountry(Product::PL_CODE);

        return $this;
    }

    /**
     * @return $this
     */
    public function addCountryUk()
    {
        $this->product->addCountry(Product::UK_CODE);

        return $this;
    }

    /**
     * @return $this
     */
    public function addCountryUs()
    {
        $this->product->addCountry(Product::US_CODE);

        return $this;
    }

    /**
     * @param float $name
     * @return $this
     */
    public function setPrice(float $price)
    {
        $this->product->setPrice($price);

        return $this;
    } 

    /**
     * @return $this
     */
    public function publish()
    {
        $this->product->setIsPublished(true);

        return $this;
    }

    /**
     * @return $this
     */
    public function setAsExternal()
    {
        $this->product->setIsExternal(true);

        return $this;
    }

    /**
     * @return $this
     */
    public function useInFeed()
    {
        $this->product->setIsUsedInFeed(true);

        return $this;
    }
    
    /**
     * Product creation
     *
     * @return Product
     */
    public function create()
    {
        $product = $this->product;
        
        $this->clear();

        return $product;
    }

}