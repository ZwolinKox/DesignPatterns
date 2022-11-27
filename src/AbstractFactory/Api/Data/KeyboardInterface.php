<?php

namespace Zwolin\DesignPatterns\AbstractFactory\Api\Data;

interface KeyboardInterface extends ColorfulInterface
{
    /**
     * @return string
     */
    public function getType(): string;
}