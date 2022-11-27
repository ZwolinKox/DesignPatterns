<?php

namespace Zwolin\DesignPatterns\AbstractFactory\Api\Data;

interface ColorfulInterface
{
    /**
     * @return string
     */
    public function getColor(): string;
}