<?php declare(strict_types=1);

namespace Zwolin\DesignPatterns\Prototype;

use DateTime;

class Article 
{
    /**
     * @var string $text
     */
    protected $text;

    /**
     * @var string $text
     */
    protected $author;

    /**
     * @var string $text
     */
    protected $title;   
    
    /**
     * @var DateTime $createdAt
     */
    protected $createdAt;

    /**
     *
     * @param string $text
     * @param string $author
     * @param string $title
     */
    public function __construct(string $text, string $author, string $title)
    {
        $this->text = $text;
        $this->title = $title;
        $this->author = $author;
        $this->createdAt = new DateTime();
    }

    /**
     * Overloaded clone method
     *
     * @return void
     */
    public function __clone()
    {
        $this->title = $this->title . ' - copy';
        $this->author = $this->author;
        $this->text = $this->text;
        $this->createdAt = new DateTime();
    }

    /**
     * @return void
     */
    public function displayArticle()
    {
        echo 'Title: ' . $this->title . "\n";
        echo 'Author: ' . $this->author . "\n";
        echo 'Text: ' . $this->text. "\n";
        echo 'Created at: ' . $this->createdAt->format('Y-m-d H:i:s'). "\n";
    }
}