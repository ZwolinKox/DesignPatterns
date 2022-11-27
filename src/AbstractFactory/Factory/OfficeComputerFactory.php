<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory\Factory;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\KeyboardInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\FactoryInterface;
use Zwolin\DesignPatterns\AbstractFactory\Keyboard\OfficeKeyboard;
use Zwolin\DesignPatterns\AbstractFactory\Mouse\OfficeMouse;
use Zwolin\DesignPatterns\AbstractFactory\System\OfficeSystem;

class OfficeComputerFactory implements FactoryInterface
{
    /**
     * @return KeyboardInterface
     */
   public function getKeyboard(): KeyboardInterface
    {
        return new OfficeKeyboard();
    }

   /**
    * @return MouseInterface
    */
   public function getMouse(): MouseInterface
   {
        return new OfficeMouse();
   }

   /**
    * @return SystemInterface
    */
   public function getSystem(): SystemInterface
   {
        return new OfficeSystem();
   }
}