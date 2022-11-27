<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Factory;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\KeyboardInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\FactoryInterface;
use Zwolin\DesignPatterns\AbstractFactory\Keyboard\GamingKeyboard;
use Zwolin\DesignPatterns\AbstractFactory\Mouse\GamingMouse;
use Zwolin\DesignPatterns\AbstractFactory\System\GamingSystem;

class GamingComputerFactory implements FactoryInterface
{
    /**
     * @return KeyboardInterface
     */
   public function getKeyboard(): KeyboardInterface
    {
        return new GamingKeyboard();
    }

   /**
    * @return MouseInterface
    */
   public function getMouse(): MouseInterface
   {
        return new GamingMouse();
   }

   /**
    * @return SystemInterface
    */
   public function getSystem(): SystemInterface
   {
        return new GamingSystem();
   }
}