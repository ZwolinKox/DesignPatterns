<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Strategy;

use Zwolin\DesignPatterns\Strategy\Api\PaymentInterface;

class PayPalPayment implements PaymentInterface
{
    /**
     * @param float $price
     * @return void
     */
    public function pay(float $price)
    {
        echo 'Paypal payment with price: ' . $price . ' started' . \PHP_EOL;
    }
}