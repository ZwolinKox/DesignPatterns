<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Strategy;

class Order
{
    /**
     * @var int
     */
    protected $userId;

    /**
     * @var float
     */
    protected $price;

    /**
     * @param integer $userId
     * @param float $price
     */
    public function __construct(int $userId, float $price)
    {
        $this->userId = $userId;
        $this->price = $price;
    }

    /**
     * @param string $paymentName
     * @return void
     */
    public function submitOrder(string $paymentName)
    {
        $paymentFactory = new PaymentFactory();
        $payment = $paymentFactory->create($paymentName);

        echo 'Submiting order...' . \PHP_EOL;

        $payment->pay($this->price);
    }
}