<?php
namespace App\Article;

class Article
{
    public function __construct(
        private int $id,
        private int $authorId,
        private string $title,
        private string $text
    ) {
    }

    public function __toString()
    {
        return $this->title . '>>> ' . $this->text;
    }
}

