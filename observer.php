<?php

use Zwolin\DesignPatterns\Observer\EventManager;
use Zwolin\DesignPatterns\Observer\User;
use Zwolin\DesignPatterns\Observer\UserObserver;

require __DIR__ . '/vendor/autoload.php';

$observer = new UserObserver();

$eventManager = new EventManager();
$eventManager->attach($observer, 'user:setName');

$user = new User($eventManager);

$user->setName('Test name');


echo 'Current name: ' . $user->getName();