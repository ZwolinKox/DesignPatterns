<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\FactoryMethod;

class Product
{
    public const TYPE_SIMPLE = 1;
    public const TYPE_VIRTUAL= 2;
    public const TYPE_CONFIGURABLE = 3;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $hasWeight;

    /**
     * @var float|null
     */
    protected $weight;

    /**
     * @var int
     */
    protected $type;

    /**
     * @param string $sku
     * @param string $name
     * @param bool $hasWeight
     * @param float|null $weight
     * @param int $weight
     */
    public function __construct(string $sku, string $name, bool $hasWeight, $weight, int $type)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->hasWeight = $hasWeight;
        $this->weight = $weight;
        $this->type = $type;
    }

    /**
     * @return void
     */
    public function display()
    {
        echo 'Sku: ' . $this->displayField($this->sku);
        echo 'Name: ' . $this->displayField($this->name);
        echo 'Has weight: ' . $this->displayField($this->hasWeight);
        echo 'Weight: ' . $this->displayField($this->weight);
        echo 'Type: ' . $this->displayField($this->sku);
    }

    /**
     * @param mixed $value
     * @return string
     */
    protected function displayField($value): string
    {
        return ($value ?? 'null') . \PHP_EOL;
    }
}