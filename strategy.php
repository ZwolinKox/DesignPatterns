<?php

use Zwolin\DesignPatterns\Strategy\Order;

require __DIR__ . '/vendor/autoload.php';

$order = new Order(12, 675.6);

$otherOrder = new Order(15, 123.50);

$order->submitOrder('cc');
$otherOrder->submitOrder('paypal');