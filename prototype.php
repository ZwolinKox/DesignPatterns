<?php
require __DIR__ . '/vendor/autoload.php';

use Zwolin\DesignPatterns\Prototype\Article;

$article = new Article('Test article text', 'Test author', 'Sample title');

$article->displayArticle();

echo '---- Displaying cloned article, wait a second.. ----' . \PHP_EOL;

sleep(1);

$clonedArticle = clone $article;

$clonedArticle->displayArticle();