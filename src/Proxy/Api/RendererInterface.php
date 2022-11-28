<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Proxy\Api;

interface RendererInterface
{
    /**
     * @param string $html
     * @return void
     */
    public function render(string $html);
}