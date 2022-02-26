<?php
namespace App\Comment;

class Comment
{
    public function __construct(
        private int $id,
        private int $authorId,
        private int $articleId,
        private string $text
    ) {
    }

    public function __toString()
    {
        return $this->articleId . '. ' . $this->text;
    }
}