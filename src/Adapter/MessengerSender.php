<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Adapter;

use Zwolin\DesignPatterns\Adapter\Api\SenderInterface;

/**
 * Adapter class for @see \Zwolin\DesignPatterns\Adapter\MessengerApi
 */
class MessengerSender implements SenderInterface
{
    /**
     * @var string
     */
    protected $userName;    
    
    /**
     * @var string
     */
    protected $password;    
    
    /**
     * @var string
     */
    protected $reciever;    
    
    /**
     * @var MessengerApi
     */
    protected $service;

    /**
     * @param string $userName
     * @param string $password
     * @param string $reciever
     */
    public function __construct(string $userName, string $password, string $reciever)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->reciever = $reciever;

        $this->service = new MessengerApi($userName, $password);
    }

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message)
    {
        $this->service->logIn();
        $this->service->sendMessage($message, $this->reciever);
    }
}