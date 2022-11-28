<?php

use Zwolin\DesignPatterns\Proxy\Renderer;
use Zwolin\DesignPatterns\Proxy\RendererProxy;

require __DIR__ . '/vendor/autoload.php';

$renderer = new Renderer();

$rendererProxy = new RendererProxy(new Renderer(), false);
$rendererProxyPassed = new RendererProxy(new Renderer(), true);


$renderer->render('<p>Hello</p>');
$rendererProxy->render('<p>You cant see me</p>');
$rendererProxyPassed->render('<p>I have passed the proxy</p>');