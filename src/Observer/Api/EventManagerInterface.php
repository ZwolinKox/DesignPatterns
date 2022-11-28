<?php

namespace Zwolin\DesignPatterns\Observer\Api;

interface EventManagerInterface
{
    /**
     * @param ObserverInterface $observer
     * @param string $event
     * @return void
     */
    public function attach(ObserverInterface $observer, string $event = '*'): void;
    /**
     * @param ObserverInterface $observer
     * @param string $event
     * @return void
     */
    public function detach(ObserverInterface $observer, string $event = '*'): void;
    /**
     * @param object $subject
     * @param string $event
     * @param mixed $data
     * @return void
     */
    public function notify($subject = null, string $event = '*', &$data = null): void;
}