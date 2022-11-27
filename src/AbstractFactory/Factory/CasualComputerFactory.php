<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Factory;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\KeyboardInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\FactoryInterface;
use Zwolin\DesignPatterns\AbstractFactory\Keyboard\CasualKeyboard;
use Zwolin\DesignPatterns\AbstractFactory\Mouse\CasualMouse;
use Zwolin\DesignPatterns\AbstractFactory\System\CasualSystem;

class CasualComputerFactory implements FactoryInterface
{
    /**
     * @return KeyboardInterface
     */
   public function getKeyboard(): KeyboardInterface
    {
        return new CasualKeyboard();
    }

   /**
    * @return MouseInterface
    */
   public function getMouse(): MouseInterface
   {
        return new CasualMouse();
   }

   /**
    * @return SystemInterface
    */
   public function getSystem(): SystemInterface
   {
        return new CasualSystem();
   }
}