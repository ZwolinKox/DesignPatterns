<?php

namespace Zwolin\DesignPatterns\Observer\Api;

interface ObserverInterface
{
    /**
     * @param object $subject
     * @param string $event
     * @param mixed $data
     * @return void
     */
    public function update(object $subject, string $event, &$data);
}