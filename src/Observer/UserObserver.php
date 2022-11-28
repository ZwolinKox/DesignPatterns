<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Observer;

use Zwolin\DesignPatterns\Observer\Api\ObserverInterface;

class UserObserver implements ObserverInterface
{
    /**
     * @param object $subject
     * @param string $event
     * @param mixed $data
     * @return void
     */
    public function update(object $subject, string $event, &$data)
    {
        $this->displayLine('Catched event: ' . $event);
        $this->displayLine('Data: ' . $data);

        $data = 'John Smith';

        $this->displayLine('Changed data: ' . $data);
    }

    /**
     * Undocumented function
     *
     * @param string $line
     * @return void
     */
    protected function displayLine(string $line)
    {
        echo $line . \PHP_EOL;
    }
}