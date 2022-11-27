<?php

namespace Zwolin\DesignPatterns\AbstractFactory\Api;

use Zwolin\DesignPatterns\AbstractFactory\Api\Data\KeyboardInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\MouseInterface;
use Zwolin\DesignPatterns\AbstractFactory\Api\Data\SystemInterface;

interface FactoryInterface
{
    /**
     * @return KeyboardInterface
     */
   public function getKeyboard(): KeyboardInterface;

   /**
    * @return MouseInterface
    */
   public function getMouse(): MouseInterface;

   /**
    * @return SystemInterface
    */
   public function getSystem(): SystemInterface;
}