<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Strategy;

use Zwolin\DesignPatterns\Strategy\Api\PaymentInterface;

class CreditCardPayment implements PaymentInterface
{
    /**
     * @param float $price
     * @return void
     */
    public function pay(float $price)
    {
        echo 'CC payment with price: ' . $price . ' started' . \PHP_EOL;
    }
}