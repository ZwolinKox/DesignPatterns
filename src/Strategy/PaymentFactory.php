<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Strategy;

use Zwolin\DesignPatterns\Strategy\Api\PaymentInterface;

class PaymentFactory 
{
    public function create(string $name): PaymentInterface
    {
        switch ($name) {
            case 'paypal':
                return new PayPalPayment();
                break;            
            case 'cc':
                return new CreditCardPayment();
                break;
        }

        return null;
    }
}