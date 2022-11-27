<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Mouse;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;

class GamingMouse implements MouseInterface
{
    protected const MOUSE_TYPE = 'wired';
    protected const MOUSE_COLOR = 'black';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return self::MOUSE_COLOR;
    }    
    
    /**
     * @return string
     */
    public function getConnectionType(): string
    {
        return self::MOUSE_TYPE;
    }
}