<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Adapter;

class MessengerApi
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
     * @var bool
     */
    protected $loggedIn;

    /**
     * @param string $userName
     * @param string $password
     */
    public function __construct(string $userName, string $password)
    {
        $this->userName = $userName;
        $this->password = $password;

        $this->loggedIn = false;
    }

    /**
     * @return void
     */
    public function logIn()
    {
        $this->loggedIn = true;
    }

    /**
     * @param string $message
     * @param string $reciever
     * @return void
     */
    public function sendMessage(string $message, string $reciever)
    {
        if (!$this->loggedIn) {
            throw new \Exception('User is not logged in');
        }

        echo 'Send messenger message: "' . $message . '" to ' . $reciever . \PHP_EOL;
    }
}