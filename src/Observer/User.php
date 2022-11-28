<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Observer;

use Zwolin\DesignPatterns\Observer\Api\EventManagerInterface;

class User
{
    /**
     * @var EventManagerInterface
     */
    protected $eventManager;

    /**
     * @param EventManagerInterface $eventManager
     */
    public function __construct(EventManagerInterface $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }    
    
    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->eventManager->notify($this, 'user:setName', $name);

        $this->name = $name;

        return $this;
    }
}