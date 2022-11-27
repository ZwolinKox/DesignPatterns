<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\System;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;

class CasualSystem implements SystemInterface
{
    protected const SYSTEM_NAME = 'MacOS';
    
    /**
     * @return string
     */
    public function getSystemName(): string
    {
        return self::SYSTEM_NAME;
    }
}