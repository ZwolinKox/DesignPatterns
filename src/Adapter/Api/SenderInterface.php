<?php

namespace Zwolin\DesignPatterns\Adapter\Api;

interface SenderInterface
{
    /**
     * Send message
     *
     * @param string $message
     * @return void
     */
    public function send(string $message);
}