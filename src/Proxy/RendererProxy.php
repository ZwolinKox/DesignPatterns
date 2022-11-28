<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Proxy;

use Zwolin\DesignPatterns\Proxy\Api\RendererInterface;

class RendererProxy implements RendererInterface
{
    /**
     * @var RendererInterface
     */
    protected $renderer;

    /**
     * Property determines that rendered can render HTML
     *
     * @var bool
     */
    protected $canRender;

    /**
     * @param RendererInterface $renderer
     * @param boolean $canRender
     */
    public function __construct(
        RendererInterface $renderer,
        bool $canRender = false
    ) {
        $this->canRender = $canRender;
        $this->renderer = $renderer;
    }

    /**
     * @param string $html
     * @return void
     */
    public function render(string $html)
    {
        if ($this->canRender) {
            $this->renderer->render($html);
        }
    }
}