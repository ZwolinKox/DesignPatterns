<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\AbstractFactory;

use Zwolin\DesignPatterns\AbstractFactory\Api\FactoryInterface;

class Computer
{
    /**
     * Method displaying computer specification for matching type
     *
     * @param FactoryInterface $computerFactory
     * @return void
     */
    public function displaySpecification(FactoryInterface $computerFactory)
    {
        $keyboard = $computerFactory->getKeyboard();
        $mouse = $computerFactory->getMouse();
        $system = $computerFactory->getSystem();

        $this->displayLine('------- SYSTEM SPECIFICATION -------');

        $this->displayLine('Keyboard type: ' . $keyboard->getType());
        $this->displayLine('Keyboard color: ' . $keyboard->getColor());        
        
        $this->displayLine('Mouse type: ' . $mouse->getConnectionType());
        $this->displayLine('Mouse color: ' . $keyboard->getColor());        
        
        $this->displayLine('System name: ' . $system->getSystemName());
    }

    protected function displayLine(string $line) 
    {
        echo $line . \PHP_EOL;
    }
}