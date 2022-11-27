<?php

namespace Zwolin\DesignPatterns\AbstractFactory\Api\Data;

interface MouseInterface extends ColorfulInterface
{
    /**
     * @return string
     */
    public function getConnectionType(): string;
}