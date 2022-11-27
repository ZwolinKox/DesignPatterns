<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\System;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;

class GamingSystem implements SystemInterface
{
    protected const SYSTEM_NAME = 'Windows';
    
    /**
     * @return string
     */
    public function getSystemName(): string
    {
        return self::SYSTEM_NAME;
    }
}