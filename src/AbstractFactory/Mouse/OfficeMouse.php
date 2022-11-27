<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Mouse;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;

class OfficeMouse implements MouseInterface
{
    protected const MOUSE_TYPE = 'wireless';
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