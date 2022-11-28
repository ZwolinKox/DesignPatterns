<?php

use Zwolin\DesignPatterns\Adapter\EmailSender;
use Zwolin\DesignPatterns\Adapter\MessengerSender;

require __DIR__ . '/vendor/autoload.php';

$emailSender = new EmailSender('test@example.comn');
$messengerSender = new MessengerSender('example', 'password', 'John Smith');


$message = 'Hello dear friend!';

$emailSender->send($message);
$messengerSender->send($message);