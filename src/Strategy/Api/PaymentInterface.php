<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Strategy\Api;

interface PaymentInterface
{
    /**
     * @param float $price
     * @return void
     */
    public function pay(float $price);
}
