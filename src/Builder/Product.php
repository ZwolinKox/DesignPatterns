<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Builder;

class Product
{
    public const PL_CODE = 'pl';
    public const US_CODE = 'us';
    public const UK_CODE = 'uk';
    
    /**
     * @var string $name
     */
    protected $name;    
    
    /**
     * @var array $allowedCountries
     */
    protected $allowedCountries;    

    /**
     * @var float $price
     */
    protected $price;

    /**
     * @var bool $isPublished
     */
    protected $isPublished;    
    
    /**
     * @var bool $isExternal
     */
    protected $isExternal;    
    
    /**
     * @var bool $isUsedInFeed
     */
    protected $isUsedInFeed;

    /**
     * @param string $name
     * @param array $allowedCountries
     * @param integer $price
     * @param boolean $isPublished
     * @param boolean $isExternal
     * @param boolean $isUsedInFeed
     */
    public function __construct(
        string $name = 'Product',
        array $allowedCountries = [],
        float $price = 0,
        bool $isPublished = false,
        bool $isExternal = false,
        bool $isUsedInFeed = false
    ) {
        $this->name = $name;
        $this->allowedCountries = $allowedCountries;
        $this->price = $price;
        $this->isPublished = $isPublished;
        $this->isExternal = $isExternal;
        $this->isUsedInFeed = $isUsedInFeed;
    } 

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): string
    {
        return $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAllowedCountries(): array
    {
        return $this->allowedCountries;
    }

    /**
     * @return array
     */
    public function cleanAllowedCountries(): void
    {
        $this->allowedCountries = [];
    }


    /**
     * @param mixed $code
     * @return string
     */
    public function addCountry($code): string
    {
        return $this->allowedCountries[] = $code;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $name
     * @return void
     */
    public function setPrice(float $price)
    {
        return $this->price = $price;
    }

    /**
     * @return bool
     */
    public function getIsPublished(): bool
    {
        return $this->isPublished;
    }

    /**
     * @param bool $isPublished
     * @return void
     */
    public function setIsPublished(bool $isPublished)
    {
        return $this->isPublished = $isPublished;
    }

    /**
     * @return bool
     */
    public function getIsExternal(): bool
    {
        return $this->isExternal;
    }

    /**
     * @param bool $isExternal
     * @return void
     */
    public function setIsExternal(bool $isExternal)
    {
        return $this->isExternal = $isExternal;
    }

    /**
     * @return bool
     */
    public function geIstUsedInFeed(): bool
    {
        return $this->isUsedInFeed;
    }

    /**
     * @param bool $isUsedInFeed
     * @return void
     */
    public function setIsUsedInFeed(bool $isUsedInFeed)
    {
        return $this->isUsedInFeed = $isUsedInFeed;
    }

    /**
     * @return void
     */
    public function display()
    {
        echo 'Name: ' . $this->getName() . \PHP_EOL;
        echo 'Allowed countries: ' . \implode(', ', $this->getAllowedCountries()) . \PHP_EOL;
        echo 'Price: ' . $this->getPrice() . \PHP_EOL;
        echo 'Published status: ' . $this->getIsPublished() . \PHP_EOL;
        echo 'Is external: ' . $this->getIsExternal() . \PHP_EOL;
        echo 'Is used in feed: ' . $this->geIstUsedInFeed() . \PHP_EOL;
    }
}