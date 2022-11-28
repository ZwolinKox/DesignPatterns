<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Adapter;

use Zwolin\DesignPatterns\Adapter\Api\SenderInterface;

class EmailSender implements SenderInterface
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message)
    {
        echo 'Send email: "' . $message . '" to ' . $this->email . \PHP_EOL;
    }
}