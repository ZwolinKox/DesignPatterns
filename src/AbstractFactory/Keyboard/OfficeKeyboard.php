<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Keyboard;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\KeyboardInterface;

class OfficeKeyboard implements KeyboardInterface
{
    protected const KEYBOARD_TYPE = 'membrane';
    protected const KEYBOARD_COLOR = 'black';

    /**
     * @return string
     */
    public function getType(): string
    {
        return self::KEYBOARD_TYPE;
    }    
    
    /**
     * @return string
     */
    public function getColor(): string
    {
        return self::KEYBOARD_COLOR;
    }
}