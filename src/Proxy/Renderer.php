<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Proxy;

use Zwolin\DesignPatterns\Proxy\Api\RendererInterface;

class Renderer implements RendererInterface
{
    public function render(string $html)
    {
        echo $html . \PHP_EOL;
    }
}