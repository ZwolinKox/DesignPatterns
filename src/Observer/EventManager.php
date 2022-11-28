<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Observer;

use stdClass;
use Zwolin\DesignPatterns\Observer\Api\EventManagerInterface;
use Zwolin\DesignPatterns\Observer\Api\ObserverInterface;

class EventManager implements EventManagerInterface
{
    /**
     * @var array
     */
    private $observers = [];

    public function __construct()
    {
        $this->observers['*'] = [];
    }

    /**
     * @param string $event
     * @return void
     */
    private function initEventGroup(string $event = '*'): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    /**
     * @param string $event
     * @return array
     */
    private function getEventObservers(string $event = '*'): array
    {
        $this->initEventGroup($event);

        $group = $this->observers[$event];
        $all = $this->observers['*'];

        return array_merge($group, $all);
    }

    /**
     * @param ObserverInterface $observer
     * @param string $event
     * @return void
     */
    public function attach(ObserverInterface $observer, string $event = '*'): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    /**
     * @param ObserverInterface $observer
     * @param string $event
     * @return void
     */
    public function detach(ObserverInterface $observer, string $event = '*'): void
    {
        foreach ($this->getEventObservers($event) as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    /**
     * @param stdClass|null $subject
     * @param string $event
     * @param mixed $data
     * @return void
     */
    public function notify($subject = null, string $event = '*', &$data = null): void
    {
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($subject, $event, $data);
        }
    }
}